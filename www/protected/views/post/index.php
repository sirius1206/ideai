<?php
/* @var $this PostController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Posts',
);

$this->menu=array(
	array('label'=>'Створити Статтю', 'url'=>array('create')),
	array('label'=>'Мої статті', 'url'=>array('admin')),
);
?>


<?php foreach( $posts as $post ){
    echo "
        <div class='psto'>

            <h4><a href='/post/{$post->id}'>{$post->title}</a></h4>
            <p class='autor'>Надруковано ".date('H:i d.m.Y', strtotime($post->created)).", aвтор : <a href='/user/{$post->autor->id}'>{$post->autor->username}</a></p>
            <div class='post'>
                $post->preview
            </div>";
    echo "
        <p class='subcat first'>
            <span>Закладки: ";
            //tags
            $tags = explode(',',$post->tag);
            $line="";
            foreach ($tags as $tag){
                $line .= "<a href='/listen/".trim( $tag )."'>".trim( $tag )."</a>, ";
            }
            echo substr($line,0,-2);

    echo "</span></p>
        <p class='subcat fg-red'><a href='/post/{$post->id}'>11 коментарів</a></p>
    ";

    echo "</div>";




} ?>

