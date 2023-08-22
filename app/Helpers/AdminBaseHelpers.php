<?php

use Illuminate\Support\Facades\Storage;


if (!function_exists('isUrl')) {
  /**
   * Get HTML attribute based on the scope
   *
   * @param $url
   *
   * @return mixed
   */
  function isUrl($url)
  {
    return filter_var($url, FILTER_VALIDATE_URL);
  }
}

if (!function_exists('image')) {
  /**
   * Get image url by path
   *
   * @param $path
   *
   * @return string
   */
  function image($path)
  {
    return asset('assets/media/' . $path);
  }
}

function is_file_exists($item, $storage = 'local')
{
  if (!blank($item) and !blank($storage)) {
    if ($storage == 'local') {
      if (file_exists('' . $item)) {
        return true;
      }
    } elseif ($storage == 'aws_s3') {
      if (Storage::disk('s3')->exists($item)) {
        return true;
      }
    } elseif ($storage == 'wasabi') {
      if (Storage::disk('wasabi')->exists($item)) {
        return true;
      }
    }

    return false;
  }
}

function is_dir_file_exists($directory, $item, $storage = 'local')
{
  if (!blank($item) and !blank($storage)) {
    if ($storage == 'local') {
      if (file_exists(`public/$directory/$item`)) {
        return true;
      }
    } elseif ($storage == 'aws_s3') {
      if (Storage::disk('s3')->exists($item)) {
        return true;
      }
    } elseif ($storage == 'wasabi') {
      if (Storage::disk('wasabi')->exists($item)) {
        return true;
      }
    }

    return false;
  }
}

function get_media($item, $storage = 'local', $updater = false)
{
  if (!blank($item) and !blank($storage)) {
    if ($storage == 'local') {
      if ($updater) {
        return base_path('public/' . $item);
      } else {
        return app('url')->asset($item);
      }
    } else if ($storage == 'aws_s3') {
      return Storage::disk('s3')->url($item);
    } else if ($storage == 'wasabi') {
      return Storage::disk('wasabi')->url($item);
    }
  }

  return false;
}

function get_svg_icon($name, $class = null, $svgClass = null, $add = null, $addSvg = null, $color = null)
{
  $file_path = 'media/img/icons/svg/' . $name . '.svg';

  if (!is_file_exists($file_path)) {
    echo 'no';
    return '';
  }
  $file_path = get_media($file_path, 'local', true);

  $svg_content = file_get_contents($file_path);

  if (empty($svg_content)) {
    echo 'nom';
    return '';
  }

  $dom = new DOMDocument();
  $dom->loadXML($svg_content);

  // remove unwanted comments
  $xpath = new DOMXPath($dom);
  foreach ($xpath->query('//comment()') as $comment) {
    $comment->parentNode->removeChild($comment);
  }

  // add class to svg
  if (!empty($svgClass)) {
    foreach ($dom->getElementsByTagName('svg') as $element) {
      $element->setAttribute('class', $svgClass);
    }
  }
  // add element to svg
  if (!empty($addSvg)) {
    foreach ($dom->getElementsByTagName('svg') as $element) {
      foreach ($addSvg as $key => $value) {
        $element->setAttribute($key, $value);
      }
    }
  }

  // remove unwanted tags
  $title = $dom->getElementsByTagName('title');
  if ($title['length']) {
    $dom->documentElement->removeChild($title[0]);
  }
  $desc = $dom->getElementsByTagName('desc');
  if ($desc['length']) {
    $dom->documentElement->removeChild($desc[0]);
  }
  $defs = $dom->getElementsByTagName('defs');
  if ($defs['length']) {
    $dom->documentElement->removeChild($defs[0]);
  }

  // remove unwanted id attribute in g tag
  $g = $dom->getElementsByTagName('g');
  foreach ($g as $el) {
    $el->removeAttribute('id');
  }
  $mask = $dom->getElementsByTagName('mask');
  foreach ($mask as $el) {
    $el->removeAttribute('id');
  }
  $rect = $dom->getElementsByTagName('rect');
  foreach ($rect as $el) {
    $el->removeAttribute('id');
    $el->setAttribute('fill', $color ?? 'currentColor');
  }
  $xpath = $dom->getElementsByTagName('path');
  foreach ($xpath as $el) {
    $el->removeAttribute('id');
    $el->setAttribute('fill', $color ?? 'currentColor');
  }
  $circle = $dom->getElementsByTagName('circle');
  foreach ($circle as $el) {
    $el->removeAttribute('id');
    $el->setAttribute('fill', $color ?? 'currentColor');
  }
  $use = $dom->getElementsByTagName('use');
  foreach ($use as $el) {
    $el->removeAttribute('id');
  }
  $polygon = $dom->getElementsByTagName('polygon');
  foreach ($polygon as $el) {
    $el->removeAttribute('id');
    $el->setAttribute('fill', $color ?? 'currentColor');
  }
  $ellipse = $dom->getElementsByTagName('ellipse');
  foreach ($ellipse as $el) {
    $el->removeAttribute('id');
    $el->setAttribute('fill', $color ?? 'currentColor');
  }

  $string = $dom->saveXML($dom->documentElement);

  $cls = array('d-flex align-items-center justify-content-center');

  if (!empty($class)) {
    $cls = array_merge($cls, explode(' ', $class));
  }

  // remove empty lines
  $string = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $string);
  $output = '<span ' . $add . ' class="' . implode(' ', $cls) . '">' . $string . '</span>';

  return $output;
}

function get_svg_icon_db($svg, $class = null, $add = null, $randColor = null, $color = null)
{
  if (empty($svg)) {
    return '';
  }

  $dom = new DOMDocument();
  $dom->loadXML($svg);

  // remove unwanted comments
  $xpath = new DOMXPath($dom);
  foreach ($xpath->query('//comment()') as $comment) {
    $comment->parentNode->removeChild($comment);
  }

  // add class to svg
  if (!empty($class)) {
    foreach ($dom->getElementsByTagName('svg') as $element) {
      $element->setAttribute('class', $class);
    }
  }
  // add element to svg
  if (!empty($add)) {
    foreach ($dom->getElementsByTagName('svg') as $element) {
      foreach ($add as $key => $value) {
        $element->setAttribute($key, $value);
      }
    }
  }

  // remove unwanted tags
  $title = $dom->getElementsByTagName('title');
  if ($title['length']) {
    $dom->documentElement->removeChild($title[0]);
  }
  $desc = $dom->getElementsByTagName('desc');
  if ($desc['length']) {
    $dom->documentElement->removeChild($desc[0]);
  }
  $defs = $dom->getElementsByTagName('defs');
  if ($defs['length']) {
    $dom->documentElement->removeChild($defs[0]);
  }

  if ($randColor) {
    $colors = ['#46C7E3', 'orange', '#737EF2', '#9f35cb', '#54c800', '#F35BC7', 'purple', 'blue', '#f89103', 'red'];
    $color = $colors[array_rand($colors)];
  }
  // remove unwanted id attribute in g tag
  $g = $dom->getElementsByTagName('g');
  foreach ($g as $el) {
    $el->removeAttribute('id');
  }
  $mask = $dom->getElementsByTagName('mask');
  foreach ($mask as $el) {
    $el->removeAttribute('id');
    $el->setAttribute('fill', $color ?? '#9f35cb');
  }
  $rect = $dom->getElementsByTagName('rect');
  foreach ($rect as $el) {
    $el->removeAttribute('id');
    $el->setAttribute('fill', $color ?? '#9f35cb');
  }
  $xpath = $dom->getElementsByTagName('path');
  foreach ($xpath as $el) {
    $el->removeAttribute('id');
    $el->setAttribute('fill', $color ?? '#9f35cb');
  }
  $circle = $dom->getElementsByTagName('circle');
  foreach ($circle as $el) {
    $el->setAttribute('fill', $color ?? '#9f35cb');
    $el->removeAttribute('id');
  }
  $use = $dom->getElementsByTagName('use');
  foreach ($use as $el) {
    $el->removeAttribute('id');
  }
  $polygon = $dom->getElementsByTagName('polygon');
  foreach ($polygon as $el) {
    $el->removeAttribute('id');
    $el->setAttribute('fill', $color ?? '#9f35cb');
  }
  $ellipse = $dom->getElementsByTagName('ellipse');
  foreach ($ellipse as $el) {
    $el->removeAttribute('id');
    $el->setAttribute('fill', $color ?? '#9f35cb');
  }

  $string = $dom->saveXML($dom->documentElement);

  // remove empty lines
  $output = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $string);

  return $output;
}
