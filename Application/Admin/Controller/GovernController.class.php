<?php
namespace Admin\Controller;
use Common\Controller\AdminBaseController;
/**
 * 科室
 */
class GovernController extends AdminBaseController{
    /**
     * 科室列表
     */
    public function index(){
		$ks=M("Ks")->select();
		$assign=array(
            'data'=>$ks
            );
		$this->assign($assign);
        $this->display();
    }
	public function add_ks(){
		$data=I('post.');
		$data['time']=time();
		$ks = M("Ks"); // 实例化User对象
		$where="ksname="."'".$data['ksname']."'";
		$isks=$ks->where($where)->select();

		if($data['ksname'] == "" || !empty($isks)){
			$this->error('添加失败');
		}
        $ks->data($data)->add();
		if ($ks) {
			$this->success('添加成功',U('Admin/Govern/index'));
		}else{
			$this->error('添加失败');
		}
	}
	public function edit_ks(){
		$data=I('post.');
		$ks=M("Ks");
		$where="ksname="."'".$data['ksname']."'";
		$isks=$ks->where($where)->select();
		if($data['ksname'] == ""  || !empty($isks)){
			$this->error('修改失败,参数错误');
		}
		$data['time']=time();
		$id='id='.$data['id'];
        $ks=$ks->data($data)->where($id)->save();
		if (!empty($ks)) {
			$this->success('修改成功',U('Admin/Govern/index'));
		}else{
			$this->error('修改失败');
		}
	
	}
	public function delete_ks(){
		$id=I('get.id');
		$where = 'id='.$id; 
		$User = M("Ks"); // 实例化User对象
         $User->where($where)->delete(); // 删除id为的用户数据
		if ($User) {
			$this->success('删除成功',U('Admin/Govern/index'));
		}else{
			$this->error('删除失败');
		}
	}
	public function order_ks(){}

}