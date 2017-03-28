<?php

namespace frontend\controllers;


use Yii;
use frontend\models\Bookings;
use frontend\models\Livedarshan;
use frontend\models\Pandits;


class ActivityController extends \yii\web\Controller {
    
    
      public function actionIndex() {
          //echo "pranaydfdff"; 
          $user_bookings = new Bookings();
          $user_booking_history = Bookings::find()->where([ 'user_id' => Yii::$app->user->id ])->with()->all();
          //print_r($user_booking_history); exit;
          //$user_bookings->
          return $this->render('index',['user_list'=>$user_booking_history]);
          //return $this->render('login', ['model' => $model,            ]);
    
    }
    
    public function actionAstrologyServices()
    {   
     return $this->render('astrology',[]);  
    }
    
    public function actionMuhurtamFixing()
    {   
     return $this->render('muhurtam',[]);  
    }
    public function actionCateringServices()
    {   
     return $this->render('catering',[]);  
    }
    public function actionEpujaService()
    {   
     return $this->render('epuja',[]);  
    }
    
    public function actionLiveDarshan()
    {   
     $livedarshan = new Livedarshan();   
     $details = Livedarshan::find()->all();
     return $this->render('live_darshan',['model'=>$details]);  
    }
    
    public function actionOurPandits()
    {   
        $model = new Pandits();
        $pandits = $model->find()->all();
        return $this->render('our_pandits',['pandits' => $pandits]); 
    }
    
    public function actionAstothara()
    {   
     return $this->render('astothara',[]);  
    }
    
    public function actionPanditRegistration()
    {   
     return $this->render('pandit_register',[]);  
    }
    
    public function actionPadnditDetails()
    {   
     return $this->render('pandit_detail_view',[]);  
    }
    
    
    
    
    
    
    

}