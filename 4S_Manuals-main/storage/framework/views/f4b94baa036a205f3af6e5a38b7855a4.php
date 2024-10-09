<!-- resources/views/components/navbar.blade.php -->

<nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="container">
        <!-- Navbar Header / Brand -->
        <div class="navbar-header mr-auto">
            <a class="navbar-brand" href="/" title="<?php echo e(__('misc.home_alt')); ?>"><?php echo e(__('misc.homepage_title')); ?></a>
            <div class="navigation">
                <a class="nav-link" href="<?php echo e(route('home')); ?>">Home</a>
                <a class="nav-link" href="<?php echo e(route('contact')); ?>">Contact</a>
            </div>

        </div>

        <!-- Navbar Search Form -->
        <div id="navbar" class="form-inline">
            <script>
                (function () {
                    var cx = 'partner-pub-6236044096491918:8149652050'; 
                    var gcse = document.createElement('script');
                    gcse.type = 'text/javascript';
                    gcse.async = true;
                    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(gcse, s);
                })();
            </script>
            <!-- Google Custom Search Engine Search Box -->
            <gcse:searchbox-only></gcse:searchbox-only>
        </div><!--/.navbar-collapse -->
    </div>
</nav>
<?php /**PATH C:\all\laragon\www\team-b-e-Celestia-investers\4S_Manuals-main\resources\views/components/navbar.blade.php ENDPATH**/ ?>