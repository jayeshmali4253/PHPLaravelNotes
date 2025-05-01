
<x-message-banner msg="user login successfully" class="success"/>

<x-message-banner msg="user signup successfully" class="success"/>

<br>
<br>
<br>

<x-message-banner msg="Password is not correct please try again" class="error"/>

<x-message-banner msg="Password is not correct please try again" class="warning"/>

<h1>Home Page</h1>


<style>
    .success{
        background:lightgreen;
        color:green;
        padding:3px 10px ;
        border-radius:2px;
        display:inline-block;
        margin:10px;
    }
    .error{
        background:#efbdb1;
        color:red;
        padding:3px 10px ;
        border-radius:2px;
        display:inline-block;
        margin:10px;
    }

    .warning{
        background:#ffe9c1;
        color:orange;
        padding:3px 10px ;
        border-radius:2px;
        display:inline-block;
        margin:10px;
    }


</style>