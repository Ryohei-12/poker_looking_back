<template>
<div class="container">
  <div class="row" v-if="utg" key="utg">
    <h1 class="text-center col-md-12">Open Raise Range From UTG</h1>
    <div class="text-center col-4 col-md-3">
      <p>ポジション</p>
      <button v-on:click="ChangeUtg" class="btn btn-dark btn-style">UTG</button></br>
      <button v-on:click="ChangeHj" class="btn btn-dark btn-style">HJ</button></br>
      <button v-on:click="ChangeCo" class="btn btn-dark btn-style">CO</button></br>
      <button v-on:click="ChangeBtn" class="btn btn-dark btn-style">BTN</button></br>
      <button v-on:click="ChangeSb" class="btn btn-dark btn-style">SB</button>
    </div>
    <div class="col-8 col-md-9 pull-left">
      <img :src="'/img/open_UTG.png'" alt="" class="img-fluid mt-4">
    </div>
  </div>
    
  <div class="row" v-else-if="hj" key="hj">
    <h1 class="text-center col-md-12">Open Raise Range From HJ</h1></br>
    <div class="text-center col-4 col-md-3">
      <p class="text-center">ポジション</p>
      <button v-on:click="ChangeUtg" class="btn btn-dark btn-style">UTG</button></br>
      <button v-on:click="ChangeHj" class="btn btn-dark btn-style">HJ</button></br>
      <button v-on:click="ChangeCo" class="btn btn-dark btn-style">CO</button></br>
      <button v-on:click="ChangeBtn" class="btn btn-dark btn-style">BTN</button></br>
      <button v-on:click="ChangeSb" class="btn btn-dark btn-style">SB</button></br>
    </div>
    <div class="col-8 col-md-9 pull-left">
      <img :src="'/img/open_HJ.png'" alt="" class="img-fluid mt-4">
    </div>
  </div>
    
  <div class="row" v-else-if="co" key="co">
    <h1 class="text-center col-md-12">Open Raise Range From CO</h1></br>
    <div class="text-center col-4 col-md-3">
      <p class="text-center">ポジション</p>
      <button v-on:click="ChangeUtg" class="btn btn-dark btn-style">UTG</button></br>
      <button v-on:click="ChangeHj" class="btn btn-dark btn-style">HJ</button></br>
      <button v-on:click="ChangeCo" class="btn btn-dark btn-style">CO</button></br>
      <button v-on:click="ChangeBtn" class="btn btn-dark btn-style">BTN</button></br>
      <button v-on:click="ChangeSb" class="btn btn-dark btn-style">SB</button></br>
    </div>
    <div class="col-8 col-md-9 pull-left">
      <img :src="'/img/open_CO.png'" alt="" class="img-fluid mt-4">
    </div>
  </div>

  <div class="row" v-else-if="btn" key="btn">
    <h1 class="text-center col-md-12">Open Raise Range From BTN</h1></br>
    <div class="text-center col-4 col-md-3">
      <p class="text-center">ポジション</p>
      <button v-on:click="ChangeUtg" class="btn btn-dark btn-style">UTG</button></br>
      <button v-on:click="ChangeHj" class="btn btn-dark btn-style">HJ</button></br>
      <button v-on:click="ChangeCo" class="btn btn-dark btn-style">CO</button></br>
      <button v-on:click="ChangeBtn" class="btn btn-dark btn-style">BTN</button></br>
      <button v-on:click="ChangeSb" class="btn btn-dark btn-style">SB</button></br>
    </div>
    <div class="col-8 col-md-9 pull-left">
      <img :src="'/img/open_BTN.png'" alt="" class="img-fluid mt-4">
    </div>
  </div>

  <div class="row" v-else-if="sb" key="sb">
    <h1 class="text-center col-md-12">Open Raise Range From SB</h1></br>
    <div class="text-center col-4 col-md-3">
      <p class="text-center">ポジション</p>
      <button v-on:click="ChangeUtg" class="btn btn-dark btn-style">UTG</button></br>
      <button v-on:click="ChangeHj" class="btn btn-dark btn-style">HJ</button></br>
      <button v-on:click="ChangeCo" class="btn btn-dark btn-style">CO</button></br>
      <button v-on:click="ChangeBtn" class="btn btn-dark btn-style">BTN</button></br>
      <button v-on:click="ChangeSb" class="btn btn-dark btn-style">SB</button></br>
    </div>
    <div class="col-8 col-md-9 pull-left">
      <img :src="'/img/open_SB.png'" alt="" class="img-fluid mt-4">
    </div>
  </div>

  <div class="row" v-else>
  <h1 class="text-center col-md-12">Open Range</h1>
    <div class="col-4 col-md-3 text-center">
      <p>ポジション</p>
      <button v-on:click="ChangeUtg" class="btn btn-dark btn-style">UTG</button></br>
      <button v-on:click="ChangeHj" class="btn btn-dark btn-style">HJ</button></br>
      <button v-on:click="ChangeCo" class="btn btn-dark btn-style">CO</button></br>
      <button v-on:click="ChangeBtn" class="btn btn-dark btn-style">BTN</button></br>
      <button v-on:click="ChangeSb" class="btn btn-dark btn-style">SB</button></br>
    </div>
    <h4 class="col-8 col-md-9 mt-5">
      ポジションを</br>選択してください
    </h4>
  </div>


</div>
</template>

<script>
export default {
    name: "OpenRange",
    data() {
      return {
        utg: false,
        hj: false,
        co: false,
        btn: false,
        sb: false,
      };
    },
    methods: {
      ChangeUtg: function () {
        this.utg = true;
        this.hj = false;
        this.co = false;
        this.btn = false;
        this.sb = false;
      },
      ChangeHj: function () {
        this.utg = false;
        this.hj = true;
        this.co = false;
        this.btn = false;
        this.sb = false;
      },
      ChangeCo: function () {
        this.utg = false;
        this.hj = false;
        this.co = true;
        this.btn = false;
        this.sb = false;
      },
      ChangeBtn: function () {
        this.utg = false;
        this.hj = false;
        this.co = false;
        this.btn = true;
        this.sb = false;
      },
      ChangeSb: function () {
        this.utg = false;
        this.hj = false;
        this.co = false;
        this.btn = false;
        this.sb = true;
      },
    }
}
</script>