<?php

$result = mysqli_query($conn,'SELECT * FROM products');

   

?> <tr>
    <?php while($row = mysqli_fetch_assoc($result)) ?>
                                        <td><?php htmlspecialchars($row['id'])?>/td>
                                        <td>
                                            <strong><?php htmlspecialchars($row['name'])?></strong>
                                            <br>
                                            <small class="text-muted"><?php htmlspecialchars($row['description'])?></small>
                                        </td>
                                        <td class="price"><?php htmlspecialchars($row['price'])?></td>
                                        <td>
                                            <span class="stock-ok">
                                                <i class="bi bi-check-circle"></i> <?php htmlspecialchars($row['quantity'])?>
                                            </span>
                                        </td>
                                        <td><small>2025-01-15</small></td>
                                        <td class="text-center">
                                            <a href="products.php?edit=1&id=1" 
                                               class="btn btn-warning btn-action">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a href="products.php?action=delete&id=1" 
                                               class="btn btn-danger btn-action"
                                               onclick="return confirm('Supprimer ce produit ?')">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </td>
                                    </tr>