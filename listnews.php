<?session_start();?>
<html lang="ru">
    <head>
        <meta charset="UTF-8">

        <title>Title</title>

        <style>
            .grid1
            {
                display: grid;
                grid-template:
                        "header header header"
                        "left body right"
                        "footer footer footer";
                grid-template-columns: repeat(auto-fit, minmax(500px,1fr));


             }
            #header
            {
                grid-area: header;
                background-color: aqua;
                text-align: center;
            }
            #left
            {
                grid-area: left;
                background-color: #f6f6f6;
            }
            #body
            {
                grid-area: body;
                text-align: left;
            }
            #right
            {
                grid-area: right;
                background-color: #f6f6f6;
            }
            #footer
            {
                grid-area: footer;
                background-color: #e6e6e6;
            }
            #inbody
            {
                display: grid;

            }
        </style>
    </head>
    <body>
        <div class="grid1">
            <div id="header">header</div>
            <div id="left"> left
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias animi deserunt dicta doloribus esse fugit minus natus necessitatibus non qui quo velit, veritatis! A beatae deserunt distinctio dolorum eos.</p>

            </div>
            <div id="body">
                <div id="inbody">
                    <h3>Ttitle</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias animi deserunt dicta doloribus esse fugit minus natus necessitatibus non qui quo velit, veritatis! A beatae deserunt distinctio dolorum eos.</p>

                </div>
            </div>
            <div id="right">right
                <?require_once('lk.php');?>
            </div>
            <div id="footer">footer</div>
        </div>
    </body>
</html>
