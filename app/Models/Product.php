<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public const prodArr = [
      'discounts' => [
          [
              'title' => 'Pizza "MeatMush"',
              'price' => 5,
              'img' => 'images/meatmush.png'
          ],
          [
              'title' => 'Pizza "Brovar"',
              'price' => 10,
              'img' => 'images/brovar.png'
          ],
          [
              'title' => 'Pizza "Salami"',
              'price' => 15,
              'img' => 'images/salami.png'
          ]
      ],
      'novelty' => [
          [
              'title' => 'Pizza "Exclusive"',
              'price' => 20,
              'img' => 'images/exclusive.png'
          ],
          [
              'title' => 'Pizza "Asorti"',
              'price' => 25,
              'img' => 'images/asorti.png'
          ],
          [
              'title' => 'Pizza "Salmara"',
              'price' => 30,
              'img' => 'images/asorti.png'
          ]
      ],
      'vegeterian' => [
          [
              'title' => 'Pizza "Shinka"',
              'price' => 35,
              'img' => 'images/shinka.png'
          ],
          [
              'title' => 'Pizza "Gribnaya"',
              'price' => 40,
              'img' => 'images/gribnaya.png'
          ],
          [
              'title' => 'Pizza "Kolbasnaya"',
              'price' => 45,
              'img' => 'images/kolbasnaya.png'
          ]
      ],
    ];
}
