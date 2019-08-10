<style>
  li {
    margin-bottom: 0.25em;
  }
  #menu {
    font-size: 28px;
    letter-spacing: 1.4px;
    color: #d3b673;
    text-transform: uppercase;
    margin-bottom: 20px;
    font-family: "Baloo", Helvetica, Arial, sans-serif;
  }
  .no-bullets {
    list-style: none outside;
    margin-left: 0;
  }
  .li1 {
    position: relative;
  }
  .list-categories ul li a {
    font-size: 16px;
    font-weight: 800;
    line-height: 2.56;
    text-align: left;
    color: #282828;
    text-transform: uppercase;
    font-family: Muli, sans-serif;
  }
  .list-categories ul li a:hover::after {
    width: 100%;
    margin-left: -50%; 
  }
  .list-categories ul li a::after {
    content: "";
    bottom: -5px;
    height: 2px;
    left: 50%;
    position: absolute;
    width: 0;
    background: #282828;
    -webkit-transition: all 0.2s ease 0s;
    -o-transition: all 0.2s ease 0s;
    transition: all 0.2s ease 0s;
  }
  #collection-sidebar .li.active>a::after  {
    content: "";
    bottom: -5px;
    height: 2px;
    left: 50%;
    position: absolute;
    background: #282828;
    -webkit-transition: all 0.2s ease 0s;
    -o-transition: all 0.2s ease 0s;
    transition: all 0.2s ease 0s;
    width: 100%;
    margin-left: -50%; 
  }
</style>
<section class="about-info p-lg-5 p-3">
    <div class="content-w3ls-inn px-lg-5">
        <div class="container py-md-5 py-3">
            <div class="row">
              <div class="col-lg-3 list-categories">
                <h3 id="menu">Menu</h3>
                <ul class="no-bullets menu-scroll" id="collection-sidebar"> 
                  <?php 
                    $type = $this->uri->segment(3);

                    foreach ($menu as $value) { 
                      $active = "";
                      if ($value->slug == $type) $active = "active";
                  ?>  
                  <li class="li <?= $active ?>">
                    <a class="li1" href="<?= site_url('san-pham/che'); ?>"><?= $value->name_type ?></a>
                  </li>
                  <?php } ?>
                </ul>
              </div>