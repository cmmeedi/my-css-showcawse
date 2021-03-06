<?php



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style>

*{
    font-family: 'Roboto', sans-serif;
}

body{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background-color: #1f1b29;;
}

button{
    color: #ffa260;
    background: none;
    border: 2px solid;
    padding: 1em 2em;
    font-size: 1em;
        /* when using transition you must address each property that the transition is to be applied to */
    transition: color .25s, border-color .25s, box-shadow .25s, transform .25s;
}

    /* box-shadow allows just that.  A shadow to the box that is selected.  the syntax for box shadow is 
offset-x, offset-y, blur, spread, color */
button:hover{
    color: white;
    border-color: #f1ff5c;
    box-shadow: 0 .5em .5em -.4em #f1ff5c;
    transform: translateY(-.25em);
    cursor: pointer;
}

    </style>
    <title>Document</title>
  </head>
  <body>
    <form
      method="get"
      action="https://my-css-showcase.herokuapp.com/index.html"
    >
      <button>Click Me</button>
    </form>
  </body>
</html>
