 <!-- ======= Blog Details Section ======= -->
 <section id="blog" class="blog">
   <div class="container" data-aos="fade-up">

     <div class="row g-5">

       <div class="col-lg-8">

         <article class="blog-details">

           <div class="post-img">
             <!-- <img src="<?= base_url(); ?>/assets/uploads/artikel/<?= $artikel->gambar; ?>" alt="" class="img-fluid" width="100%"> -->
           </div>

           <h2 class="title"><?= $artikel->judul; ?></h2>

           <div class="meta-top">
             <ul>
               <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">Admin</a></li>
               <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2020-01-01"><?= $artikel->tanggal; ?></time></a></li>
               <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li> -->
             </ul>
           </div><!-- End meta top -->

           <div class="content">
             <p>
               <?= $artikel->isi; ?>
             </p>

           </div><!-- End post content -->

           <div class="meta-bottom">
             <i class="bi bi-folder"></i>
             <ul class="cats">
               <li><a href="#"><?= $artikel->kategori; ?></a></li>
             </ul>
           </div><!-- End meta bottom -->

         </article><!-- End blog post -->
       </div>

       <div class="col-lg-4">

         <div class="sidebar">

           <div class="sidebar-item search-form">
             <h3 class="sidebar-title">Search</h3>
             <form action="<?= base_url('artikel/index'); ?>" class="mt-3" method="GET">
               <input type="text" name="search">
               <button type="submit"><i class="bi bi-search"></i></button>
             </form>
           </div><!-- End sidebar search formn-->

           <div class="sidebar-item categories">
             <h3 class="sidebar-title">Categories</h3>
             <ul class="mt-3">
               <?php foreach ($kategori_artikel as $kategori) : ?>
                 <li><a href="<?= base_url('artikel/index/?search=' . $kategori); ?>"><?= $kategori; ?></a></li>
               <?php endforeach ?>
             </ul>
           </div><!-- End sidebar categories-->

           <div class="sidebar-item recent-posts">
             <h3 class="sidebar-title">Recent Posts</h3>

             <div class="mt-3">
               <?php foreach ($articles as $article) : ?>
                 <div class="post-item mt-3">
                   <?php echo get_thumb_articles($article->id); ?>
                   <!-- <img src="<?= base_url(); ?>/assets/uploads/artikel/<?= $article->gambar; ?>" alt=""> -->
                   <div>
                     <h4><a href="<?= base_url('artikel/detail/' . $article->id); ?>"><?= $article->judul; ?></a></h4>
                     <time datetime="2020-01-01"><?= $article->tanggal; ?></time>
                   </div>
                 </div><!-- End recent post item-->
               <?php endforeach ?>
             </div>

           </div><!-- End sidebar recent posts-->


         </div><!-- End Blog Sidebar -->

       </div>
     </div>

   </div>
 </section><!-- End Blog Details Section -->