<?php 
	
	class TareaController extends Controller{

		public function actionIndex(){

			$tareas=Tareas::model()->findAll();
			$this->render('index', array('tareas'=>$tareas));

		}

		public function actionView($id){
			
			$model=Tareas::model()->findByPk($id);
			$this->render('view',array('registro'=>$model));

		}

		public function actionEdit($id){
		
			$model=Tareas::model()->findByPk($id);

			if(isset($_POST['Tareas']))	{
			/*echo '<pre>';
			print_r($_POST);
			echo '</pre>';
			Yii::app()->end();
			*/ 
				$model->attributes=$_POST['Tareas'];
				if($model->save()){
					$this->redirect(array('view','id'=>$model->id));
				}
			}
				$this->render('edit',array('registro'=>$model));					
		}

		public function actionAdd(){
		
			$model=new Tareas();

			if(isset($_POST['Tareas']))	{
			/*echo '<pre>';
			print_r($_POST);
			echo '</pre>';
			Yii::app()->end();
			*/ 
				$model->attributes=$_POST['Tareas'];
				if($model->save()){
					$this->redirect(array('view','id'=>$model->id));
				}
			}
				$this->render('add',array('registro'=>$model));					
		}

		public function actionDelete($id){
		
			$delete=Tareas::model()->findByPk($id);
			$delete->delete();
			$this->redirect(array('index'));

			
								
		}

	}
?>