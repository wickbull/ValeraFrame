 <!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div style="margin-top: 15px;"></div>

    <ol class="breadcrumb">
        <?php foreach( $variable['sult'] as $value ): ?>
            <?php if ( $value['1'] == 'NULL' ): ?>
                <li class="breadcrumb-item">
                    <?php echo $value['0'] ?>
                </li>
            <?php elseif ( $value['1'] == 'active' ): ?>
                <li class="breadcrumb-item <?php echo $value['1'] ?>">
                    <?php echo $value['0'] ?>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ol>

    <!-- Content Row -->
    <div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-3 mb-4">
            <div class="list-group">

                <?php foreach ($variable['buttons'] as $value) 
                {

                   echo $value;

                } ?>
                
            </div>
        </div>
        <!-- Content Column -->
        <div class="col-lg-9 mb-4">
            <h2>Section Heading</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, et temporibus, facere perferendis veniam beatae non debitis, numquam blanditiis necessitatibus vel mollitia dolorum laudantium, voluptate dolores iure maxime ducimus fugit.</p>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->