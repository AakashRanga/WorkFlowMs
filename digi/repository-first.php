<?php include("digimed-navbar.php") ?>

<style>
    .repo-first {
        padding: 90px 0px;
    }

    .repo-row {
        display: grid;
        grid-template-columns: 1fr 3fr;
        gap: 10px;
        align-items: center;
    }

    /* Add responsiveness for smaller screens
    @media (max-width: 768px) {
        .repo-row {
            grid-template-columns: 1fr;
        }
    } */

    .issue-item {
        display: flex;
        flex-direction: column;
        gap: 5px;
        border-right: 1px solid #cccc;
    }

    .repo-first .container{
        display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: normal;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    padding: 20px 20px;
    }

    .repo-first i{
        color: #10147e;
    }


    @media (max-width:770px) {
        .repo-first .container{
            width: 92%;
            align-items: center;
        }   
        .repo-row{
            /* display: block; */
            width: calc(100vw - 100px);
            gap: 30px;

        }   
        .issue-item{
            border-right: none;
        }  
        .volume-info{
            width: calc(100vw - 240px);
            border-right: 1px solid #ccc;
            height: calc(100vh - 240px);
        }
    }

</style>

<section class="repo-first">
    <div class="container">
        <div class="repo-row">
            <div class="volume-info">
                <b>Unit 1</b><br>
                <b>2024</b>
            </div>
            <div class="issues">
                <div class="row">
                    <div class="col-lg-3 issue-item">
                        <b>Issue 1</b>
                        <b>Year 2024</b>
                        <a href="repository.php"><i class="fa-regular fa-file"></i> </a>
                    </div>
                   
                    
                </div>
            </div>
            
        </div>
        <hr>
        <div class="repo-row">
            <div class="volume-info">
                <b>Unit 1</b><br>
                <b>2024</b>
            </div>
            <div class="issues">
                <div class="row">
                    <div class="col-lg-3 issue-item">
                        <b>Issue 1</b>
                        <b>Year 2024</b>
                        <a href="repository.php"><i class="fa-regular fa-file"></i> </a>
                    </div>
                   
                    
                </div>
            </div>
            
        </div>
     </div>
</section>
