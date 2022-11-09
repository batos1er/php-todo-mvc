<?php
class TaskListController extends AbstractController {
  
  public function render () : void {
      $search = null;
      $orderby = null;
      $completed = null;
      $page = null;
      if(isset($_GET["search"])){
         $search =  $_GET["search"];
      }
      if(isset($_GET["order-by"])){
          $orderby =  $_GET["order-by"];
      }
      if(isset($_GET["only-show-completed"])){
          $completed = false;
      }
      if(isset($_GET["page"])){
          $page =  $_GET["page"];
      }
          echo get_template(__PROJECT_ROOT__ . "/Views/list.php", [
              'tasks' =>  $this->taskService->list(["search"=>$search, "orderBy"=>$orderby, "hideCompleted"=>$completed, "page"=>$page])['tasks']
          ]);
  }
  
}