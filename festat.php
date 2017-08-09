<?php
/*
Plugin Name: Festat Islame
Plugin URI: http://fjalaime.ch/shkarko/shtesat/
Description: Kjo shtese e thjeshte mundeson paraqitjen e festave Islame per vitin ne kutize te caktuar ne ditet e caktuara.
Author: Skender Mustafi
Version: 1.0.1
Author URI: http://www.skendermustafi.ch
*/
 
 class WWWFjalaimeChIslam extends WP_Widget
{
  function WWWFjalaimeChIslam()
  {
    $widget_ops = array('classname' => 'WWWFjalaimeChIslam', 'description' => 'Shfaq festat Islame n&euml; putiz&euml; (widget).' );
    $this->WP_Widget('WWWFjalaimeChIslam', 'Festat Islame', $widget_ops);
  }
 
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'titulli' => '' ) );
    $titulli = $instance['titulli'];
?>
  <p><label for="<?php echo $this->get_field_id('titulli'); ?>">Titulli: <input class="widefat" id="<?php echo $this->get_field_id('titulli'); ?>" name="<?php echo $this->get_field_name('titulli'); ?>" type="text" value="<?php echo attribute_escape($titulli); ?>" /></label></p>
<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['titulli'] = $new_instance['titulli'];
    return $instance;
  }
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget;
    $titulli = empty($instance['titulli']) ? ' ' : apply_filters('widget_title', $instance['titulli']);
 
    if (!empty($titulli))
      echo $before_title . $titulli . $after_title;;
 
    // Festat zyrtare
   $date = date("m,d");
if($date == "02,03"){ echo("<div><table><tr><td><img src=/wp-content/plugins/festat-Islame/islam.png width=30></td><td>Mevludi, 11/12 Rebiul Evvel</td></tr></table></div>"); }
else if($date == "02,04"){ echo("<div><table><tr><td><img src=/wp-content/plugins/festat-Islame/islam.png width=30></td><td>Mevludi, 11/12 Rebiul Evvel</td></tr></table></div>"); }
else if($date == "05,24"){ echo("<div><table><tr><td><img src=/wp-content/plugins/festat-Islame/islam.png width=30></td><td>Lejletul-Regaib, 03/04 Rexheb</td></tr></table></div>"); }
else if($date == "05,25"){ echo("<div><table><tr><td><img src=/wp-content/plugins/festat-Islame/islam.png width=30></td><td>Lejletul-Regaib, 03/04 Rexheb</td></tr></table></div>"); }
else if($date == "06,16"){ echo("<div><table><tr><td><img src=/wp-content/plugins/festat-Islame/islam.png width=30></td><td>Lejletul- Miraxh, 26/27 Rexheb</td></tr></table></div>"); }
else if($date == "06,17"){ echo("<div><table><tr><td><img src=/wp-content/plugins/festat-Islame/islam.png width=30></td><td>Lejletul- Miraxh, 26/27 Rexheb</td></tr></table></div>"); }
else if($date == "07,04"){ echo("<div><table><tr><td><img src=/wp-content/plugins/festat-Islame/islam.png width=30></td><td>Lejletul-Berat, 14/15 Shaban</td></tr></table></div>"); }
else if($date == "07,05"){ echo("<div><table><tr><td><img src=/wp-content/plugins/festat-Islame/islam.png width=30></td><td>Lejletul-Berat, 14/15 Shaban</td></tr></table></div>"); }
else if($date == "07,20"){ echo("<div><table><tr><td><img src=/wp-content/plugins/festat-Islame/islam.png width=30></td><td>Fillimi i Agjërimit, 1 Ramazan</td></tr></table></div>"); }
else if($date == "08,14"){ echo("<div><table><tr><td><img src=/wp-content/plugins/festat-Islame/islam.png width=30></td><td>Nata e Kadrit, 26/27 Ramazan</td></tr></table></div>"); }
else if($date == "08,15"){ echo("<div><table><tr><td><img src=/wp-content/plugins/festat-Islame/islam.png width=30></td><td>Nata e Kadrit, 26/27 Ramazan</td></tr></table></div>"); }
else if($date == "08,19"){ echo("<div><table><tr><td><img src=/wp-content/plugins/festat-Islame/islam.png width=30></td><td>G&eumlzuar Fitër Bajrami</td></tr></table></div>"); }
else if($date == "10,25"){ echo("<div><table><tr><td><img src=/wp-content/plugins/festat-Islame/islam.png width=30></td><td>G&eumlzuar Kurban Bajrami</td></tr></table></div>"); }
else if($date == "11,15"){ echo("<div><table><tr><td><img src=/wp-content/plugins/festat-Islame/islam.png width=30></td><td>Viti i Ri i Hixhretit, 1 Muharem</td></tr></table></div>"); }
else if($date == "11,24"){ echo("<div><table><tr><td><img src=/wp-content/plugins/festat-Islame/islam.png width=30></td><td>Dita e Ashureve, 10 Muharem</td></tr></table></div>"); }

//Nese nuk ka feste atehere nuk ka asgje ne kutize
else { echo("<div>Sot nuk ka asnj&euml; fest&euml!</div>"); }
 
    echo $after_widget;
  }
 
}
add_action( 'widgets_init', create_function('', 'return register_widget("WWWFjalaimeChIslam");') );?>