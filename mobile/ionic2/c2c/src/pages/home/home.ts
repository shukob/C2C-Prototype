import {Component, ViewChild} from '@angular/core';

import {List, ModalController, NavController} from 'ionic-angular';
import {BasePage} from "../base/base-page";
import {Category} from "../../models/Category";
import {Item} from "../../models/Item";
import {EditItemPage} from "../edit-item/edit-item";

@Component({
  selector: 'page-home',
  templateUrl: 'home.html',
})
export class HomePage extends BasePage {
  @ViewChild(List) list: List;
  categories = Array < Category >(
    {title: 'すべて'},
    {title: 'レディース'},
    {title: 'ベビー・キッズ'},
    {title: 'インテリア・雑貨'},
    {title: 'コスメ・美容'},
    {title: 'ハンドメイド'},
    {title: 'チケット'},
    {title: 'その他'},
    {title: '自動車・オートバイ　'},
    {title: 'スポーツ・レジャー'},
    {title: '架電・スマホ・カメラ'},
    {title: 'エンタメ'},
    {title: 'メンズ'},
  );

  items = Array<Item>(
    {thumbnailUrl: 'http://placehold.it/150x150', price: 0},
    {thumbnailUrl: 'http://placehold.it/150x150', price: 0},
    {thumbnailUrl: 'http://placehold.it/150x150', price: 0},
    {thumbnailUrl: 'http://placehold.it/150x150', price: 0},
    {thumbnailUrl: 'http://placehold.it/150x150', price: 0},
    {thumbnailUrl: 'http://placehold.it/150x150', price: 0},
    {thumbnailUrl: 'http://placehold.it/150x150', price: 0},
    {thumbnailUrl: 'http://placehold.it/150x150', price: 0},
    {thumbnailUrl: 'http://placehold.it/150x150', price: 0},
    {thumbnailUrl: 'http://placehold.it/150x150', price: 0},
  );

  itemChunks = Array<Array<Item>>();

  public get imageSize() {
    return this.list.getNativeElement().outerWidth / 3
    // return 150;
  }


  constructor(public navCtrl: NavController, public modalCtrl: ModalController) {
    super();
    this.generateItemChunks();
  }

  generateItemChunks() {
    this.itemChunks = [];
    let array = this.items.slice(0);
    while (array.length) {
      this.itemChunks.push(array.splice(0, 3));
    }
  }

  showNewItem(){
    this.modalCtrl.create(EditItemPage).present()
  }

}
