<?php if ( empty($title) ): ?>
    <?php $title = $view->get_title(); ?>
  <?php endif; ?>
  <?php if ($title): ?>
    <h1 class="views-title"><?php print t($title)?></h1>
  <?php endif; ?>
<div class="container">
  <div class="add-to-cart large-12 columns">
    <div class="content-cart large-3 columns">
      &nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <?php foreach ($rows as $key => $value) {?>
      <div class="content-cart large-3 columns">
      <?php print render($value['add_to_cart_form']);?>
      </div>
    <?php }?>
  </div>
  <div class="image-container large-12 columns">
    <div class="field-image large-3 columns">
      IMAGEN
    </div>
    <?php foreach ($rows as $key => $value) {?>
      <div class="field-image large-3 columns">
        <div class="field-contain">
          <?php print render($value['field_image']);?>
        </div>
      </div>
    <?php }?>
  </div>
  <div class="title-container large-12 columns">
    <div class="field-title large-3 columns">
      NOMBRE
    </div>
    <?php foreach ($rows as $key => $value) {?>
      <div class="field-title large-3 columns">
        <?php print render($value['title']);?>
      </div>
    <?php }?>
  </div>
  <div class="body-container large-12 columns">
    <div class="field-body large-3 columns">
      DESCRIPCIÓN
    </div>
    <?php foreach ($rows as $key => $value) {?>
      <div class="field-body large-3 columns">
        <?php print render($value['body']);?>
      </div>
    <?php }?>
  </div>
  <div class="price-container large-12 columns">
    <div class="field-price large-3 columns">
      PRECIO UNIDAD
    </div>
    <?php foreach ($rows as $key => $value) {?>
      <div class="field-price large-3 columns">
        <?php print render($value['commerce_price']);?>
      </div>
    <?php }?>
  </div>
  <div class="price-prom-container large-12 columns">
    <div class="field-price-prom large-3 columns">
      PRECIO PROMOCIÓN
    </div>
    <?php foreach ($rows as $key => $value) {?>
      <div class="field-price-prom large-3 columns">
        <?php print render($value['field_commerce_saleprice']);?>
      </div>
    <?php }?>
  </div>
  <div class="sku-container large-12 columns">
    <div class="field-sku large-3 columns">
      MODELO
    </div>
    <?php foreach ($rows as $key => $value) {?>
      <div class="field-sku large-3 columns">
        <?php print render($value['sku']);?>
      </div>
    <?php }?>
  </div>
  <div class="servicios-container large-12 columns">
    <div class="field-servicios large-3 columns">
      SERVICIOS
    </div>
    <?php foreach ($rows as $key => $value) {?>
      <div class="field-servicios large-3 columns">
        <?php print render($value['field_servicios']);?>
      </div>
    <?php }?>
  </div>
  <div class="remove-container large-12 columns">
    <div class="field-remove large-3 columns">
      ELIMINAR
    </div>
    <?php foreach ($rows as $key => $value) {?>
      <div class="field-remove large-3 columns">
        <?php print render($value['nothing']);?>
      </div>
    <?php }?>
  </div>
  <div class="add-to-cart large-12 columns">
    <div class="content-cart large-3 columns">
      &nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <?php foreach ($rows as $key => $value) {?>
      <div class="content-cart large-3 columns">
      <?php print render($value['add_to_cart_form']);?>
      </div>
    <?php }?>
  </div>
</div>
