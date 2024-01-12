<?php

interface IUser {
    function insert(User $User);
    function edit(User $User);
     function login($email);
     function cheking($email);
    function delete($UserId);
    function display();
    
}
?>
