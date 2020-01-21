<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Category</th>
            <th>Title</th>
            <th>Author</th>
            <th>Date</th>
            <th>Image</th>
            <th>Content</th>
            <th>Tags</th>
            <th>Comments</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>

    <?php

        $query = "SELECT * FROM posts";
        $select_posts = mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($select_posts)){
            $post_id = $row['post_id'];
            $post_category_id = $row['post_category_id'];
            $post_title = $row['post_title'];
            $post_author = $row['post_author'];
            $post_date = $row['post_date'];
            $post_image = $row['post_image'];
            $post_content = $row['post_content'];
            $post_tags = $row['post_tags'];
            $post_comment_count = $row['post_comment_count'];
            $post_status = $row['post_status'];

            echo
            "<tr>
            <td>$post_id</td>
            <td>$post_category_id</td>
            <td>$post_title</td>
            <td>$post_author</td>
            <td>$post_date</td>
            <td><img width='120px' src='../img/$post_image'></td>
            <td></td>
            <td>$post_tags</td>
            <td>$post_comment_count</td>
            <td>$post_status</td>
            
            </tr>";
        }

    ?>

            <!-- <td><a href='categories.php?delete={$cat_id}'>Delete</th>
                <td><a href='categories.php?edit={$cat_id}'>Edit</th> -->

    </tbody>
</table>