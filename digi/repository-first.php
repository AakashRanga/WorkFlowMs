<?php include("digimed-navbar.php") ?>

<style>
    .repo-first {
        padding: 90px 0;
    }

    .repo-row {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px 0;
    }

    /* Make items stack vertically on smaller screens */
    @media (max-width: 768px) {
        .repo-row {
            flex-direction: column;
            align-items: flex-start;
        }
    }

    .volume-info {
        flex: 1;
        font-weight: bold;
    }

    .issues {
        flex: 3;
    }

    .issue-item {
        display: flex;
        flex-direction: column;
        gap: 5px;
        border-right: 1px solid #ccc;
        padding-right: 10px;
    }

    /* Container styling */
    .repo-first .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: stretch;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        padding: 20px;
    }

    .repo-first i {
        color: #10147e;
    }

    /* Adjustments for smaller screens */
    @media (max-width: 770px) {
        .repo-first .container {
            width: 92%;
            align-items: center;
        }

        .issue-item {
            border-right: none;
        }

        .volume-info {
            width: 100%;
            border-right: 1px solid #ccc;
        }
    }
</style>

<section class="repo-first">
    <div class="container">
        <div id="repo-container">
            <!-- The data will be populated here -->
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $.ajax({
            url: "api/repo.php",
            type: "POST",
            dataType: "json",
            success: function(response) {
                if (response.status === 200) {
                    const data = response.data;
                    let htmlContent = '';

                    data.forEach((item, index) => {
                        htmlContent += `
                        <div class="repo-row">
                            <div class="volume-info">
                                <b>${item.units}</b><br>
                           
                            </div>
                            <div class="issues">
                                <div class="issue-item">
                                   <b>${item.title ? item.title : `Title ${index + 1}`}</b>

                                   <div class="d-flex">
                                        <a href="repository.php" class="me-2">
                                            <i class="fa-regular fa-file"></i>
                                        </a>
                                        
                                        <b class="me-2">|</b>

                                        <a href="${item.zipfilepath}"  download>
                                            <b>[Download]</b>
                                        </a>
                                   </div>

                                </div>
                            </div>
                        </div>
                        <hr>
                    `;
                    });

                    $('#repo-container').html(htmlContent);
                } else {
                    console.error("Error: " + response.message);
                }
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error: " + error);
            }
        });
    });
</script>
<!-- <b>${item.title ? item.title : `Issue ${index + 1}`}</b> -->