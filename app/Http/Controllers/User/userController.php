<?php
namespace App\Http\Controllers\User;
use Illuminate\Routing\Controller;
use App\Model\User\index;
class userController extends Controller{
    /**
     * 查询
     * @param $id
     */
    public function user($id){
        $data=index::where(['user_id'=>$id])->first()->toArray();
        print_r($data);
    }
    /**
     * 新增
     */
    public function useradd(){
        $data=[
          'user_email'=>str_random('10').'@qq.com',
            'create_time'=>time()
        ];
        $res=index::insertGetId($data);
        var_dump($res);
    }

    /**更新
     * @param $id
     */
    public function userUp($id){
        $data=[
            'user_email'=>str_random('12').'@163.com',
            'create_time'=>time()
        ];
        $where=[
          'user_id'=>$id
        ];
        $res=index::where($where)->update($data);
        var_dump($res);
    }

    /**
     * 删除
     * @param $id
     */
    public function userDel($id){
        $where=[
          'user_id'=>$id
        ];
        $res=index::where($where)->delete();
        var_dump($res);
    }
    /**
     * 渲染视图
     */
    public function view(){
        $data=index::all();
        $info=[
            'data'=>$data,
            'page'=>'100'
        ];
        return view('user.user',$info);
    }
    public function test01(){
        echo '111';
    }
}
?>