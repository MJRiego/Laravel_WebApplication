

<?php $__env->startSection('title','ABOUT PAGE'); ?>

<?php $__env->startSection('content'); ?>
    
    <div class="row py-3">
        <div>
            <h3 class='title'>What we do</h3>
        </div>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore 
            recusandae commodi ullam placeat minima neque blanditiis explicabo 
            aliquid esse error, laudantium reprehenderit minus tempore maxime 
            ab libero, culpa mollitia corrupti!  Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore 
            recusandae commodi ullam placeat minima neque blanditiis explicabo 
            aliquid esse error, laudantium reprehenderit minus tempore maxime 
            ab libero, culpa mollitia corrupti!
        </p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore 
            recusandae commodi ullam placeat minima neque blanditiis explicabo 
            aliquid esse error, laudantium reprehenderit minus tempore maxime 
            ab libero, culpa mollitia corrupti!
        </p>
    </div>
    <div class="row  ">
        <div class="col-md-6 mission py-3">
            <div class="box green">
                <h3>MISSION</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore 
                    recusandae commodi ullam placeat minima neque blanditiis explicabo 
                    aliquid esse error, laudantium reprehenderit minus tempore maxime 
                    ab libero, culpa mollitia corrupti!
                </p>
            </div>
        </div>
        <div class="col-md-6 vision py-3">
            <div class="box pink">
                <h3>VISION</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore 
                    recusandae commodi ullam placeat minima neque blanditiis explicabo 
                    aliquid esse error, laudantium reprehenderit minus tempore maxime 
                    ab libero, culpa mollitia corrupti! Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore 
                    recusandae commodi ullam placeat minima neque blanditiis explicabo 
                    aliquid esse error, laudantium reprehenderit minus tempore maxime 
                    ab libero, culpa mollitia corrupti!
                </p>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<style>
    .box{
        border: 1px solid black;
        height: 250px;
        overflow:hidden;
        padding: 10px;
        border-radius: 20px 0px 20px 0;
        box-shadow: -5px 5px 10px black;
    }
    .green{
        background-color: rgb(144, 250, 171);
    }
    .pink{
        background-color: rgb(250, 172, 231);
    }
    .title{
        text-align: center;
    }
    .mission{
        text-align: center;
    }
    .vision{
        text-align: center;
    }
    .vision p{
        text-align: left
    }
    .mission p{
        text-align: left
    }
</style>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mark\webapp\resources\views/about.blade.php ENDPATH**/ ?>