<?php include('header.php'); ?>


    <h2 class="text-3xl font-bold">Create Category</h2>
    <hr class="h-1 bg-blue-500">


    <form action="actioncategory.php" method="POST" class="mt-5">
        <input type="text" name="categoryname" placeholder="Category Name" class="border border-gray-200 p-2 rounded w-full mt-4">

        <input type="number" name="priority" placeholder="Priority" class="border border-gray-200 p-2 rounded w-full mt-4">


        <div class="flex justify-center gap-2 mt-4">
            <input type="submit" value="Submit" class="bg-blue-600 text-white px-2 py-1 rounded cursor-pointer">
            <a href="categories.php" class="bg-red-600 block text-white px-2 py-1 rounded ">Cancel</a>

        </div>

    </form>

<?php include('footer.php'); ?>