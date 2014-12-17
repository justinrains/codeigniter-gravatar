<?php
/* Usage: Put this file in the models directory for your CI install.
 * In the construct of your controller add this:
 * $this->load->model('Gravatar_model');
 *
 * Size is in square pixels.
 *
 * Default can be:
mm: (mystery-man) a simple, cartoon-style silhouetted outline of a person (does not vary by email hash)
identicon: a geometric pattern based on an email hash
monsterid: a generated 'monster' with different colors, faces, etc
wavatar: generated faces with differing features and backgrounds
retro: awesome generated, 8-bit arcade-style pixelated faces
 * $rating can be:
 * g: suitable for display on all websites with any audience type.
pg: may contain rude gestures, provocatively dressed individuals, the lesser swear words, or mild violence.
r: may contain such things as harsh profanity, intense violence, nudity, or hard drug use.
x: may contain hardcore sexual imagery or extremely disturbing violence.
 */
class Gravatar_model extends CI_Model {
  function __construct() {
      // Call the Model constructor
      parent::__construct();
  }
  function get_gravatar($email, $size = 200, $default = 'retro', $rating = 'pg') {
    $emailhash = md5(strtolower(trim($email)));
    return 'http://www.gravatar.com/avatar/'.$emailhash.'?s='.$size.'&r='.$rating.'&d='.$default;
  }
}
?>