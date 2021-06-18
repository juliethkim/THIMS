<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>search data from database in codeigniter - phpcodingstuff.com</title>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      <!-- Styles -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <style>
         html, body {
         background-color: #fff;
         color: #636b6f;
         font-family: 'Nunito', sans-serif;
         font-weight: 200;
         height: 100vh;
         margin: 0;
         }
      </style>
   </head>
   <body>
      <div class="container">
         <div class="row">
            <h1 class="text-center">search data from database in codeigniter</h1>
            <?php foreach ($searchdata as $key=> $value): ?>
            <div class="col-lg-12 col-md-12">
               <div class="single-courses-list-box mb-30">
                  <div class="box-item">
                     <div class="courses-image">
                        <div class="image" style="background-image: url('<?= base_url();?>uploads/tutorial_images/<?= $value->image;?>');">
                           <img src="<?= base_url();?>uploads/tutorial_images/<?= $value->image;?>" alt="<?= $value->tutorial_name?>" title="<?= $value->tutorial_name;?>">
                           <a target="_blank" href="<?= base_url();?>blog/<?= $value->slug;?>" class="link-btn"></a>
                        </div>
                     </div>
                     <div class="courses-desc">
                        <div class="courses-content">
                           <h2 class="courses_content_h2"><a href="<?= base_url();?>blog/<?= $value->slug;?>" class="d-inline-block" title="<?= $value->meta_tag_title; ?>"><?= ucfirst($value->tutorial_name);?></a></h2>
                           <?php $tutorialdesc = $this->Front_Model->getdescriptiontutorial($value->id); ?>
                           <p><?php $shorttuto = @$tutorialdesc->tutorial_data;
                              echo substr($shorttuto, '0','200');
                              ?> ...</p>
                        </div>
                        <div class="courses-box-footer">
                           <ul>
                              <li class="students-number" class="list_bottom_text_me">
                                 <i class='bx bx-user'></i> By Ajay kumar
                              </li>
                              <li class="courses-lesson" class="list_bottom_text_me">
                                 <i class='bx bx-calendar'></i> <?= $value->create_at;?>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <?php endforeach ?>
         </div>
      </div>
   </body>
</html>