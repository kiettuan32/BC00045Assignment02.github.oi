<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Category;
use Symfony\Component\Routing\Annotation\Route;
class CategoryController extends AbstractController
{
    #[Route('/Category', name: 'app_Category')]
    public function index(Request $request)
    {
        $categories = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findAll();
        return $this->render('category/index.html.twig', [
            'categories' => $categories,
        ]);
    }
    #[Route('/Category', name: 'app_create_Category')]
    public function create(Request $request)
    {
        $category = new Category();
        $category->setName($request->request->get('name'));
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($category);
        $entityManager->flush();
        return $this->redirectToRoute('category_index');
    }
    #[Route('/Category', name: 'app_edit_Category')]
    public function edit(Request $request, $id)
    {
        $category = $this->getDoctrine()
            ->getRepository(Category::class)
            ->find($id);
        if ($request->isMethod('post')) {
            $category->setName($request->request->get('name'));
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
            return $this->redirectToRoute('category_index');
        }
        return $this->render('category/edit.html.twig', [
            'category' => $category,
        ]);
    }
    #[Route('/Category', name: 'app_delete_Category')]
    public function delete(Request $request, $id)
    {
        $category = $this->getDoctrine()
                ->getRepository(Category::class)
                ->find($id);
        if ($request->isMethod('post')) {
           $entityManager = $this->getDoctrine()->getManager();
           $entityManager->remove($category);
           $entityManager->flush(); 
           return $this->redirectToRoute('category_index');
        }
         return $this->render('category/delete.html.twig', [
            'category' => $category,
        ]);
    }
}