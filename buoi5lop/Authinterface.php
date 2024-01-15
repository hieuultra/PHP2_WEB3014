<?php
interface Authinterface
{
   //Interface trong PHP được sử dụng để định nghĩa 
   //một tập hợp các phương thức mà các lớp khác sẽ phải triển khai.
   const MSG = "abc"; //hằng số (constant)
   public function login();
   public function register();
}
