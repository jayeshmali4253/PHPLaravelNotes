
<x-message-banner msg="about user " class="success"/>

<h1>This is About Page</h1>

<x-message-banner msg="went somthing wrong" class="error" />

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