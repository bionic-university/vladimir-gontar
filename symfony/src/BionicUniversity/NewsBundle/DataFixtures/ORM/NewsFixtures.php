<?php
namespace BionicUniversity\NewsBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BionicUniversity\NewsBundle\Entity\Article;
use BionicUniversity\NewsBundle\Entity\Tag;
use BionicUniversity\NewsBundle\Entity\TagArticle;
use BionicUniversity\NewsBundle\Entity\Category;

class NewsFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $tag1 = new Tag();
        $tag1->setName('война');
        $manager->persist($tag1);

        $tag2 = new Tag();
        $tag2->setName('смешно');
        $manager->persist($tag2);

        $tag3 = new Tag();
        $tag3->setName('религия');
        $tag3->setDescription('Описание тега религия здесь');
        $tag3->setCount(0);
        $manager->persist($tag3);

        $category1 = new Category();
        $category1->setName('Все категории');
        $manager->persist($category1);

        $category2 = new Category();
        $category2->setName('Политика');
        $category2->setParent($category1);
        $manager->persist($category2);

        $category3 = new Category();
        $category3->setName('Культура');
        $category3->setParent($category1);
        $manager->persist($category3);

        $category4 = new Category();
        $category4->setName('Киев');
        $category4->setParent($category1);
        $manager->persist($category4);


        $article1 = new Article();
        $article1->setName('Новость 1');
        $article1->setExcerpt('Это краткое описание первой новости');
        $article1->setContent('Здесь полное описание первой новости. Здесь полное описание первой новости. Здесь полное описание первой новости. Здесь полное описание первой новости. Здесь полное описание первой новости. Здесь полное описание первой новости. Здесь полное описание первой новости. Здесь полное описание первой новости. Здесь полное описание первой новости. Здесь полное описание первой новости. Здесь полное описание первой новости. Здесь полное описание первой новости. Здесь полное описание первой новости. Здесь полное описание первой новости. Здесь полное описание первой новости. Здесь полное описание первой новости. Здесь полное описание первой новости. ');
        $article1->setCategory($category2);
        $article1->setStatus(1);
        $article1->setAuthor(1);
        $manager->persist($article1);

        $article2 = new Article();
        $article2->setName('Новость 2');
        $article2->setExcerpt('Это краткое описание второй новости');
        $article2->setContent('Здесь полное описание второй новости. Здесь полное описание второй новости. Здесь полное описание второй новости. Здесь полное описание второй новости. Здесь полное описание второй новости. Здесь полное описание второй новости. Здесь полное описание второй новости. Здесь полное описание второй новости. Здесь полное описание второй новости. Здесь полное описание второй новости. Здесь полное описание второй новости. Здесь полное описание второй новости.');
        $article2->setCategory($category3);
        $article2->setStatus(1);
        $article2->setAuthor(1);
        $manager->persist($article2);

        $article3 = new Article();
        $article3->setName('Новость 3');
        $article3->setExcerpt('Это краткое описание новости ТРИ');
        $article3->setContent('Здесь полное описание новости ТРИ. Здесь полное описание новости ТРИ. Здесь полное описание новости ТРИ. Здесь полное описание новости ТРИ. Здесь полное описание новости ТРИ. Здесь полное описание новости ТРИ. Здесь полное описание новости ТРИ. Здесь полное описание новости ТРИ. Здесь полное описание новости ТРИ. Здесь полное описание новости ТРИ. Здесь полное описание новости ТРИ. Здесь полное описание новости ТРИ. Здесь полное описание новости ТРИ. Здесь полное описание новости ТРИ. Здесь полное описание новости ТРИ. Здесь полное описание новости ТРИ. Здесь полное описание новости ТРИ. Здесь полное описание новости ТРИ. Здесь полное описание новости ТРИ. Здесь полное описание новости ТРИ.');
        $article3->setCategory($category2);
        $article3->setStatus(1);
        $article3->setAuthor(1);
        $manager->persist($article3);

        $article4 = new Article();
        $article4->setName('Новость 4');
        $article4->setExcerpt('Это краткое описание новости 4');
        $article4->setContent('Здесь полное описание новости 4. Здесь полное описание новости 4. Здесь полное описание новости 4. Здесь полное описание новости 4. Здесь полное описание новости 4. Здесь полное описание новости 4. Здесь полное описание новости 4. Здесь полное описание новости 4. Здесь полное описание новости 4. Здесь полное описание новости 4. Здесь полное описание новости 4. Здесь полное описание новости 4. Здесь полное описание новости 4. Здесь полное описание новости 4. Здесь полное описание новости 4. Здесь полное описание новости 4. Здесь полное описание новости 4. Здесь полное описание новости 4. Здесь полное описание новости 4. Здесь полное описание новости 4.');
        $article4->setCategory($category2);
        $article4->setStatus(1);
        $article4->setAuthor(1);
        $manager->persist($article4);
        
        $tagArticle1 = new TagArticle();
        $tagArticle1->setTag($tag1);
        $tagArticle1->setArticle($article1);
        $manager->persist($tagArticle1);

        $tagArticle2 = new TagArticle();
        $tagArticle2->setTag($tag2);
        $tagArticle2->setArticle($article2);
        $manager->persist($tagArticle2);

        $tagArticle3 = new TagArticle();
        $tagArticle3->setTag($tag2);
        $tagArticle3->setArticle($article1);
        $manager->persist($tagArticle3);
        
        $manager->flush();


        /*
                $blog2 = new Blog();
                $blog2->setTitle('The pool on the roof must have a leak');
                $blog2->setBlog('Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Na. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis.');
                $blog2->setImage('pool_leak.jpg');
                $blog2->setAuthor('Zero Cool');
                $blog2->setTags('pool, leaky, hacked, movie, hacking, symblog');
                $blog2->setCreated(new \DateTime("2011-07-23 06:12:33"));
                $blog2->setUpdated($blog2->getCreated());
                $manager->persist($blog2);
        */
    }

}