<?php

namespace Admin\Controller;

use Common\Controller\AdminBaseController;

/**

 * ��̨��ҳ������

 */

class ShowController extends AdminBaseController{



	/**

	 * �û��б�

	 */

	public function index(){
		// $pdid = $_SESSION['user']['id'];
		// $res = M('auth_group as g') -> join("yuyue_auth_group_access as a on g.id=a.group_id") -> field('g.id') -> where("a.uid='$pdid'") -> find();
  //               $useid = $res['id'];
  //       if($useid == 18 || $useid ==19){
  //           $this->display('Make/yzck');
  //       }elseif($useid== 16){
  //           $this->display('Make/inpatient');
  //       }else{
		// 	$this->display('Index/welcome');
		// }
			$this->display('Index/welcome');

	}









}

