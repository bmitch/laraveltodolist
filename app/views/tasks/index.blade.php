<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>All Tasks</h1>

        @foreach($tasks as $task)
            <li>{{ link_to("tasks/$task->id", $task->title)  }}</li>
        
        @endforeach


    </body>
</html>