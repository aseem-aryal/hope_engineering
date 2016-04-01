<!-- Navigation -->
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
        <li class="sidebar-brand">
            <a href="<?php echo site_url('') ?>"  onclick = $("#menu-close").click(); >Hope Engineering</a>
        </li>
        
        <li>
         <a href="<?php echo site_url('index.php/general_detail/add/') ?>" onclick = $("#menu-close").click();>New General Entry</a>
        </li>
        <li>
            <a href="<?php echo site_url('index.php/general_detail/index/') ?>" onclick = $("#menu-close").click();>View Entries</a>
        </li>
        
        <!--
        <li>
            <a href="<?php echo site_url('search') ?>" onclick = $("#menu-close").click();>Make Query</a>
        </li>
        <li>
            <a href="<?php echo site_url('details/list_all') ?>" onclick = $("#menu-close").click();>View List</a>
        </li>
        <li>
            <a href="<?php echo site_url('/details/add/') ?>" onclick = $("#menu-close").click();>New Entry</a>
        </li>
        <li>
            <a href="<?php echo site_url('details/edit') ?>" onclick = $("#menu-close").click();>Update Entry</a>
        </li>
        <li>
            <a href="<?php echo site_url('log') ?>"  onclick = $("#menu-close").click(); >View Log</a>
        </li>
                    <li>
            <a href="#services" onclick = $("#menu-close").click(); >View User Details</a>
        </li>
        <li>
            <a href="#portfolio" onclick = $("#menu-close").click(); >Portfolio</a>
        </li>
        <li>
            <a href="#contact" onclick = $("#menu-close").click(); >Contact</a>
        </li>
        -->
    </ul>
</nav>


<!-- jQuery -->
<script src='<?= site_url("js/jquery.js"); ?>'></script>

<!-- Bootstrap Core JavaScript -->
<script src='<?= site_url("js/bootstrap.min.js"); ?>'></script>

<!-- Custom Theme JavaScript -->
<script>
// Closes the sidebar menu
                $("#menu-close").click(function (e) {
                    e.preventDefault();
                    $("#sidebar-wrapper").toggleClass("active");
                });

// Opens the sidebar menu
                $("#menu-toggle").click(function (e) {
                    e.preventDefault();
                    $("#sidebar-wrapper").toggleClass("active");
                });

</script>
