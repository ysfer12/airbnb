public function delete()
{
  $id = $_POST['delete_category'];

  if ($this->CategoryModel->delete($id)) {
    // Redirect to the category index page with a success message
    header('Location: /back/admin/category/index?message=Category deleted successfully');
  } else {
    // Redirect to the category index page with an error message
    header('Location: /back/admin/category/index?message=Failed to delete category');
  }

  exit();
}
