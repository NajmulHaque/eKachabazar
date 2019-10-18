<style>
    #cntContent{
        position: relative;
        margin: 50px;
        /* text-align: center;
        justify-content: center;
        align-items: center; */
        left: 20%
    }
    #cntForm{
        width: 35%;
    }
    #textSearch{
        padding-left: 20px;
        font-size: 14px;"
    }
    #cntBtn{
        font-size: 18px;
    }
    #btn1,#btn2{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 22px;
        margin: 25px;
        padding: 5px;
        border-radius: 5px;
    }
    #cntContent h1{
        margin-bottom: 30px;
        font-family: Arial, Helvetica, sans-serif;
    }

</style>

<div class="row">
    <div class="col-md-8 col-sm-8 col-xs-8">
        <div id="cntContent">
            <h1>Be part of our family</h1>
            <form action="#" method="POST" id="cntForm">
                <div class="input-group">
                    <input type="text" value="+880" class="form-control" id="textSearch" required>
                    <div class="input-group-btn">
                        <button id="cntBtn" type="submit" class="btn btn-primary">Get App</button>
                    </div>
                </div>
            </form>
            <div id="cnt_link">
                    <button id="btn1" type="submit" class="btn btn-success">Google Play</button>
                    <button id="btn2" type="submit" class="btn btn-info">Apple Store</button>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-4">
        <img src="\images\iphone.png" width="50%" alt="">
    </div>
</div>