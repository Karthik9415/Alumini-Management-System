<div class="header">
    <div class="content white">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <h1>
                            <span class="fa fa-leanpub" aria-hidden="true"></span>Alumni Management
                            <label>Education</label>
                        </h1>
                    </a>
                </div>
                <!--/.navbar-header-->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <nav class="link-effect-2" id="link-effect-2">
                        <ul class="nav navbar-nav">
                            <li class="active" >
                                <a href="<?php echo base_url()?>home" class="effect-3">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>adminlogin" class="effect-3">Admin</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>studentlogin" class="effect-3">Student</a>
                            </li>

                            <li>
                                <a href="<?php echo base_url()?>search" class="effect-3">Alumni Search</a>
                            </li>
                            <li>
                                <a href="" class="effect-3" onclick="pandi()">Report</a>
                            </li>
                            <li>
                                <a href="" class="effect-3" onclick="gowtham()">message </a>
                            </li>


                        </ul>
                    </nav>
                </div>
                <!--/.navbar-collapse-->
                <!--/.navbar-->
            </div>
        </nav>
    </div>
</div>

<script>
    function gowtham() {
        alert("After student login using message");

    }

</script>
<script>
    function pandi() {
        alert("After student login using Report");

    }

</script>