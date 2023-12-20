<h2 class="m-3">home : Utilisateur</h2>
<table class="table">
    <div class="d-flex justify-content-end p-2">
        <a href="product/add" class="btn btn-primary">add</a>
    </div>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (empty($users)) {
            echo '<tr><td colspan="7">No users found.</td></tr>';
        } else {
            foreach ($users as $index => $user) {

        ?>
                <tr>
                <th scope="row"><?=($index + 1)?></th>
                <td><?=$user->getFirstname()?></td>
                <td><?=$user->getLastname()?></td>
                <td><?=$user->getEmail()?></td>
                <td><?=$user->getPhone()?></td>
                <td>Action</td>
                </tr>
                <?php
            }
        }
        ?>
    </tbody>

</table>

