<?php

namespace BionicUniversity\NewsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use BionicUniversity\NewsBundle\Entity\Article;
use BionicUniversity\NewsBundle\Form\ArticleType;

/**
 * Article controller.
 *
 */
class ArticleController extends Controller
{

    /**
     * Lists all Article of Tag entities.
     *
     */
    public function tagAction($tag)
    {
        $em = $this->getDoctrine()->getManager();

        $tagEntity = $em->getRepository('BionicUniversityNewsBundle:Tag')->find($tag);

        $tasAr = $tagEntity->getTas();
        $articles = array();

        foreach ($tasAr as $ta){
            $articles[] = $em->getRepository('BionicUniversityNewsBundle:Article')->find($ta->getArticleId());
        }

        $entities = $articles;

        //$entities = $em->getRepository('BionicUniversityNewsBundle:Article')->findBy(array('tag'=> $tag));

        return $this->render('BionicUniversityNewsBundle:Article:index.html.twig', array(
            'entities' => $entities,
            'tag'=>$tagEntity,
        ));
    }

    /**
     * Lists all Article of Category entities.
     *
     */
    public function categoryAction($category)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BionicUniversityNewsBundle:Article')->findBy(array('categoryId' => $category));

        $categoryEntity = $em->getRepository('BionicUniversityNewsBundle:Category')->find($category);
        return $this->render('BionicUniversityNewsBundle:Article:index.html.twig', array(
            'entities' => $entities,
            'category' => $categoryEntity,
        ));
    }


    /**
     * Lists all Article entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BionicUniversityNewsBundle:Article')->findAll();

        return $this->render('BionicUniversityNewsBundle:Article:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Article entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Article();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('article_show', array('id' => $entity->getId())));
        }

        return $this->render('BionicUniversityNewsBundle:Article:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Article entity.
     *
     * @param Article $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Article $entity)
    {
        $form = $this->createForm(new ArticleType(), $entity, array(
            'action' => $this->generateUrl('article_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Article entity.
     *
     */
    public function newAction()
    {
        $entity = new Article();
        $form = $this->createCreateForm($entity);

        return $this->render('BionicUniversityNewsBundle:Article:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Article entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BionicUniversityNewsBundle:Article')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Article entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        $category = $em->getRepository('BionicUniversityNewsBundle:Category')->find($entity->getCategoryId());

        $tags = $entity->getTag();

        return $this->render('BionicUniversityNewsBundle:Article:show.html.twig', array(
            'entity' => $entity,
            'category' => $category,
            'tags' => $tags,
            'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing Article entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BionicUniversityNewsBundle:Article')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Article entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BionicUniversityNewsBundle:Article:edit.html.twig', array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Article entity.
     *
     * @param Article $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Article $entity)
    {
        $form = $this->createForm(new ArticleType(), $entity, array(
            'action' => $this->generateUrl('article_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Article entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BionicUniversityNewsBundle:Article')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Article entity.');
        }

        $previousCollections = $entity->getTas();
        $previousCollections = $previousCollections->toArray();
        foreach ($previousCollections as $ta) {
            $entity->removeTa($ta);
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {

            $em->flush();

            return $this->redirect($this->generateUrl('article_edit', array('id' => $id)));
        }

        return $this->render('BionicUniversityNewsBundle:Article:edit.html.twig', array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Article entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BionicUniversityNewsBundle:Article')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Article entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('article'));
    }

    /**
     * Creates a form to delete a Article entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('article_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm();
    }
}
