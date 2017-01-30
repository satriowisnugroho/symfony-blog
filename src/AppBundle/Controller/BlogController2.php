<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Blog;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class BlogController2 extends Controller
{
    /**
     * @Route("/blog", name="blog_list")
     */
    public function listAction()
    {
        return $this->render('admin/index.html.twig');
    }

    public function showAction($slug)
    {
        return new Response(
            "<p>$slug</p>"
        );
    }

    /**
     * @Route("/blog/create", name="create_blog")
     */
    public function createAction()
    {
//        $blog = new Blog();
//        $blog->setTitle('Turunkan Ahok');
//        $blog->setDescription('Ergonomic and stylish!');
//        $blog->setSlug('turunkan-ahok');
//
//        $em = $this->getDoctrine()->getManager();
//        $em->persist($blog);
//        $em->flush();
//
//        return new Response('Saved new product with id '.$blog->getId());

//        $blogId = 1;
//        $blog = $this->getDoctrine()
//            ->getRepository('AppBundle:Blog')
//            ->find($blogId);
//
//        if (!$blog) {
//            throw $this->createNotFoundException(
//                'No product found for id '.$blogId
//            );
//        }
//
//        return new Response(dump($blog));


        $blogId = 1;

        $repository = $this->getDoctrine()
            ->getRepository('AppBundle:Blog');

        $blog = $repository->findOneById($blogId);

        $blog = $repository->findOneByTitle('Turunkan Ahok');

        $blogs = $repository->findByDescription('and');

        $blogs = $repository->findAll();

        return new Response(dump($blogs));
    }
}