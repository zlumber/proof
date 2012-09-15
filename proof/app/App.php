<?php
namespace proof\app;
/**
 * timestamp Sep 9, 2012 8:40:20 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app
 *
 * Class that enscapulates an entire program.
 *
 */
use proof\util\Stack;
use proof\util\Event;


abstract class App implements Controller
{

    /**
     * Internal user agent.
     * @var proof\app\UserAgent
     * @access protected
     */
    protected $agent;

    /**
     * Window for the app.
     * @var proof\app\Window
     * @access protected
     */
    protected $w;

    /**
     * Internal stack
     * @var proof\util\Stack
     * @access protected
     */
    protected $stack;





    public function __construct(UserAgent $agent, Window $w)
    {

         $this->stack = new Stack();
         $this->agent = $agent;
         $this->w = $w;

    }

    abstract protected function init();

    abstract protected function finish();

     protected function push(Controller $c)
     {

          $this->stack->push($c);

     }

     public function onEvent(Event $e)
     {

          if($e instanceof SpawnEvent)
              $this->push($e->getController);
     }


    public function main()
    {

        

        $this->init();

        while(!$this->stack->isEmpty())
        {

            $this->stack->pop()->main();

        }

        $this->finish();


     }
}