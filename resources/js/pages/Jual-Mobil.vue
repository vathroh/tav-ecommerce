<template>
  <section>
    <div class="sell-car-header">
      <div class="sell-car-header-hero">
        <div class="sell-car-header-hero-image">
          <img src="images\sell-hero-1.png" alt="" />
        </div>
      </div>

      <div class="sell-car-form">
        <div>
          <div class="sell-car-form-header">
            Masukan Data Mobil Anda, Inspeksi & Cek Harga Gratis!
          </div>
          <form>
            <div class="sell-car-form-container">
              <div class="sell-car-form-group">
                <label for="merk">Merek Mobil</label>
                <select name="merk" id="merk" v-model="data.merk" @change="getDataMerk(data.merk.id)">
                  <option selected>Pilih Merek Mobil</option>
                  <option :value="merks.id" v-for="merks in merk">{{ merks.name }}</option>
                </select>
              </div>
              <div class="sell-car-form-group">
                <label for="model">Model Mobil</label>
                <select name="model" id="model" v-model="data.model">
                  <option selected>Pilih Model Mobil</option>
                  <option :value="models.id" v-for="models in model">{{ models.name }}</option>
                </select>
              </div>
              <div class="sell-car-form-group">
                <label for="Tahun">Tahun Mobil</label>
                <select name="tahun" id="tahun" v-model="data.year">
                  <option selected>Pilih Tahun</option>
                  <option value="2010">2010</option>
                  <option value="2014">2014</option>
                  <option value="2016">2016</option>
                  <option value="2019">2019</option>
                  <option value="2021">2021</option>
                  <option value="2021">2022</option>
                </select>
              </div>
              <div class="sell-car-form-group">
                <label for="whatsapp">No. Handphone/WhatsApp</label>
                <input id="whatsapp" type="text" placeholder="No. Handphone/WhatsApp" v-model="data.mobile_phone" />
              </div>
            </div>
            <button type="submit" class="sell-car-form-button" @click.prevent="saveSubmissionData">
              MULAI JUAL DI SINI
            </button>
            <p> Dengan melanjutkan, Saya setuju dengan <a href="#">Kebijakan Privasi</a> & <a href="#">Ketentuan
                Penggunaan </a></p>
          </form>
        </div>
      </div>
    </div>

    <div class="easier-box">
      <h3 class="sell-car-section-heading">
        Semakin Mudah Menjual Mobil di TAV
      </h3>
      <div class="easier-content">
        <div class="easier-card">
          <div class="easier-card-circle">
            <h2>1</h2>
          </div>
          <div class="easier-card-content">
            <div class="easier-card-content-images">
              <img src="/images/illustration/Coding _Outline.svg" alt="input-data" />
            </div>
            <h2 class="easier-card-content-text">Input data mobil Anda</h2>
          </div>
        </div>

        <div class="easier-card">
          <div class="easier-card-circle">
            <h2>2</h2>
          </div>
          <div class="easier-card-content">
            <div class="easier-card-content-images">
              <img src="/images/illustration/Mobile Phone_Outline.svg" alt="tav-menghubungi-anda" />
            </div>
            <h2 class="easier-card-content-text">TAV menghubungi Anda</h2>
          </div>
        </div>

        <div class="easier-card">
          <div class="easier-card-circle">
            <h2>3</h2>
          </div>
          <div class="easier-card-content">
            <div class="easier-card-content-images">
              <img src="/images/illustration/Car_Two Color.svg" alt="inspeksi-mobil-anda" />
            </div>
            <h2 class="easier-card-content-text">Inspeksi mobil Anda</h2>
          </div>
        </div>

        <div class="easier-card">
          <div class="easier-card-circle">
            <h2>4</h2>
          </div>
          <div class="easier-card-content">
            <div class="easier-card-content-images">
              <img src="/images/illustration/Bank note_Isometric.svg" alt="pembayaran" />
            </div>
            <h2 class="easier-card-content-text">
              Dapatkan harga terbaik dan pembayaran dalam waktu singkat
            </h2>
          </div>
        </div>
      </div>
    </div>
    <div class="sell-car-section-why">
      <h3 class="sell-car-section-heading">
        Kenapa Jual Mobil di TAV?
        <h2 class="sell-car-section-heading-h2"></h2>
      </h3>

      <div class="sell-car-section-why-sell-content">
        <div class="grid-why-sell">
          <div class="why-sell-content-icon">
            <img src="images/illustration/Handshake_Outline.svg" width="140px" alt="" />
          </div>
          <div class="why-sell-content-text">
            <h2 class="why-sell-content-text-heading">Aman dan Terpercaya</h2>
            <p class="why-sell-content-text-p">
              Inspektur Kami akan melaksanakan pengecekan terhadap kondisi mobil Anda dengan baik
            </p>
          </div>
        </div>
        <div class="grid-why-sell">
          <div class="flex items-center">
            <img src="images/illustration/Entrepreneurs_Isometric.svg" width="140px" alt="trustworthy" />
          </div>
          <div class="why-sell-content-text">
            <h2 class="why-sell-content-text-heading">Proses Mudah</h2>
            <p class="why-sell-content-text-p">
              Proses Inspeksi yang mudah dan nyaman, Kami juga akan membantu hingga proses kepengurusan dokumen Anda
            </p>
          </div>
        </div>
        <div class="grid-why-sell">
          <div class="why-sell-content-icon">
            <img src="images/illustration/Handshake_Two Color.svg" width="140px" alt="" />
          </div>
          <div class="why-sell-content-text">
            <h2 class="why-sell-content-text-heading">Penawaran Terbaik</h2>
            <p class="why-sell-content-text-p">
              Kami memberikan harga yang terbaik untuk pembelian mobil Anda
            </p>
          </div>
        </div>
        <div class="grid-why-sell">
          <div class="flex items-center">
            <img src="images/illustration/Rocket Boy_Flatline.svg" width="140px" alt="trustworthy" />
          </div>
          <div class="why-sell-content-text">
            <h2 class="why-sell-content-text-heading">Pembayaran Instan</h2>
            <p class="why-sell-content-text-p">
              Setelah proses inspeksi selesai dan telah ada kesepakatan harga, maka pada saat itu juga Kami akan
              membayar mobil Anda
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="sell-car-question-box">
      <img class="sell-car-question-img" src="images/icons/icons8-why-quest-96.png" alt="" />
      <div class="sell-car-question-content">
        <h1 class="sell-car-question-h1">Punya pertanyaan lebih lanjut ?</h1>
        <div class="sell-car-question-text">
          <p class="sell-car-question-text-p">
            Hubungi Kami
            <a href="#"><i class="fa fa-whatsapp"></i></a>
          </p>
        </div>
      </div>
    </div>
  </section>
</template>


<script>
import axios from 'axios'

export default {
  data() {
    return {
      merk: [],
      model: [],
      data: {
        merk: 'Pilih Merek Mobil',
        model: "Pilih Model Mobil",
        year: "Pilih Tahun",
        mobile_phone: ''
      },
    }
  },

  created() {
    fetch('/api/brand')
      .then(response => response.json())
      .then(data => {
        this.merk = data
        // console.log(this.merk)
      })       
  },

  methods: {
    getDataMerk() {
      axios.get(`api/model-by-brand/` + this.data.merk)
      .then(response => {
        this.model = response.data
        console.log(response.data)
        })
    },
    saveSubmissionData() {
      axios.post(`/api/car-selling-submission`, {
        merk_id: this.data.merk,
        model_id: this.data.model,
        year: this.data.year,
        mobile_phone: this.data.mobile_phone
      })
        .then(response => {
          this.$router.push('adft') 
          console.log(response)
        })
        .catch(e => {
          console.log(e)
          
        })
    }
  }
}
</script>

<style scoped>
section {
  /* margin-top: 40px; */
}

.sell.car-header {
  position: relative;
}

.sell-car-header-hero {
  width: 100%;
  height: 300px;
  position: relative;
  background-color: #4F8FDA;
}

.sell-car-header-hero-image {
  position: absolute;
  width: 100%;
  height: 100%;
}

.sell-car-header-hero-image img {
  height: 100%;
  width: 100%;
  object-fit: cover;
}

.sell-car-header-hero-content {
  position: absolute;
  width: 100%;
}

.sell-car-header-hero-content-text {
  padding: 40px;
  text-align: center;
  width: 100%;
}

.sell-car-header-hero-content-text h1 {
  color: white;
  font-size: 24px;
  text-align: center;
  font-weight: 700;
  margin-top: 16px;
  margin-bottom: 8x;
  text-transform: capitalize;
}

.sell-car-header-hero-content-text h2 {
  text-align: center;
  font-weight: 700;
  font-size: 32px;
  color: #93c5fd;
  line-height: 24px;
  margin-top: 12px;
}

.sell-car-header-hero-content-text h2 span {
  color: #93c5fd;
  text-align: center;
  font-size: 20px;
}

.sell-car-form {
  position: relative;
  margin: 40px;
}

.sell-car-form-header {
  font-size: 18px;
  color: #252525;
  text-align: center;
  font-weight: 700;
  margin: auto;
}

.sell-car-form form {
  margin-top: 16px;
}

.sell-car-form-group {
  margin-top: 12px;
}

.sell-car-form-group label {
  font-size: 12px;
  font-weight: 500;
}

.sell-car-form-group input,
.sell-car-form-group select {
  font-size: 14px;
  width: 100%;
  padding: 4px 8px;
  border: 1px solid grey;
  border-radius: 4px;
  margin-top: 4px;
  height: 45px;
}

.sell-car-form-button {
  width: 100%;
  color: white;
  background-color: #4F8FDA;
  border-radius: 6px;
  font-weight: 600;
  height: 48px;
  letter-spacing: 0.1em;
  margin-top: 24px;
  border: none
}

form p {
  text-align: center;
  font-size: 14px;
  font-weight: 400;
  line-height: 14px;
  margin-top: 20px;
}

form p a,
form p a:hover {
  color: #252525;
  font-weight: 400;
  font-size: 14px;
  text-decoration: underline;
}

.sell-car-form-button:hover {
  background-color: #fbbc05;
}

.sell-car-section-heading {
  margin-bottom: 40px;
  text-align: center;
  font-size: 24px;
  font-weight: 700;
  color: #252525;
}

.easier-box {
  background-color: #E2E8F0;
  padding: 40px 40px 80px 40px;
}

.easier-card {
  width: 100%;
  background-color: white;
  border-radius: 8px;
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
    var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
  padding: 40px;
  height: 224px;
  position: relative;
  overflow: hidden;
  margin: 16px 0;
}

.easier-card-circle {
  position: absolute;
  height: 112px;
  width: 112px;
  background-color: #4F8FDA;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  top: -40px;
  left: -40px;
  font-weight: 700;
  font-size: 24px;
}

.easier-card-circle h2 {
  transform: translate(12px, 12px);
  color: white;
}

.easier-card-content {
  height: 100%;
  width: 100%;
}

.easier-card-content-images {
  width: 100%;
  height: 65%;
}

.easier-card-content-images img {
  height: 100%;
  width: 100%;
  object-fit: contain;
}

.easier-card-content-text {
  color: #252525;
  font-size: 20px;
  text-align: center;
  font-weight: 600;
  text-shadow: 1px 1px 3px rgb(36 37 47 / 25%);
}

.sell-car-section-why {
  margin: 28px auto;
  width: 90%;
}

.grid-why-sell {
  display: grid;
  grid-template-columns: 1fr 3fr;
  margin-top: 16px;
}

.why-sell-content-icon {
  display: flex;
  align-items: center;
}

.why-sell-content-text {
  margin-left: 4px;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.why-sell-content-text-heading {
  font-weight: 500;
  font-size: 18px;
}

.sell-car-section-heading-h2 {
  color: #252525;
}

.why-sell-content-text-p {
  color: #64748b;
}

.sell-car-question-box {
  margin-top: 64px;
  text-align: center;
  background-color: #E2E8F0;
  padding: 16px;
}

.sell-car-question-img {
  margin: 0 auto;
}

.sell-car-question-h1 {
  font-size: 20px;
  color: #252525;
  font-weight: 700;
  text-align: center;
  text-shadow: 0px 1px 2px rgb(30 29 39 / 19%), 1px 2px 4px rgb(54 64 147 / 18%);
}

.sell-car-question-text {
  color: #252525;
  width: 100%;
  display: flex;
  justify-content: center;
}

.sell-car-question-text-p {
  font-size: 18px;
  font-weight: 600;
  text-shadow: 0px 1px 2px rgb(30 29 39 / 19%), 1px 2px 4px rgb(54 64 147 / 18%);
}

@media (min-width: 640px) {
  section {
    margin-top: 40px;
  }

  .sell-car-header-hero {
    height: 400px;
  }

  .sell-car-header-hero-content-text h1 {
    font-size: 36px;
  }

  .sell-car-section-heading {
    margin-top: 40px;
  }

  .easier-content {
    margin-top: 40px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 16px;
  }

  .easier-card {
    margin: 0;
  }

  .why-sell-content-text-p {
    font-size: 14px;
  }

  .sell-car-question-box {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .sell-car-question-img {
    margin: 0;
  }

  .sell-car-question-content {
    padding: 20px;
  }

  .sell-car-question-h1 {
    font-size: 24px;
  }

  .sell-car-question-text-p {
    font-size: 20px;
  }
}

@media (min-width: 768px) {
  section {
    margin-top: 64px;
  }

  .sell-car-header-hero {
    height: 100%;
    position: absolute;
  }

  .sell-car-header {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    min-height: calc(100vh - 94px);
  }

  .sell-car-header-hero-content {
    position: absolute;
    height: 100%;
    width: 50%;
    display: flex;
    align-items: center;
    transform: translateY(16px);
  }

  .sell-car-header-hero-content-text h1 {
    text-align: left;
  }

  .sell-car-header-hero-content-text h2 {
    text-align: left;
    font-size: 60px;
    margin-top: 32px;
    line-height: 48px;
  }

  .sell-car-header-hero-content-text h2 span {
    font-size: 36px;
  }

  .sell-car-form {
    /* top: 4px;
    right: 8px; */
    background-color: white;
    border-radius: 4px;
    max-width: 500px;
    padding: 40px;
    margin: 40px 150px;
  }

  .sell-car-form-container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-column-gap: 20px;
  }

  .sell-car-form-header {
    font-size: 20px;
  }

  .sell-car-form form {
    font-size: 14px;
  }

  .sell-car-section-heading {
    font-size: 32px;
  }



  .easier-content {
    grid-template-columns: 1fr 1fr 1fr 1fr;
  }

  .why-sell-content-text-p {
    margin-top: 8px;
  }

  .sell-car-question-h1 {
    font-size: 32px;
  }

  .sell-car-question-text {
    margin-top: 8px;
  }

  .sell-car-question-text-p {
    font-size: 24px;
  }
}

@media (min-width: 1024px) {
  section {
    margin-top: 86px;
  }

  .sell-car-header-hero-content-text {
    padding: 64px;
  }

  .sell-car-header-hero-content-text h2 {
    font-size: 72px;
  }

  .sell-car-header-hero-content-text h2 span {
    font-size: 48px;
  }

  .sell-car-section-heading {
    margin: 64px 0;
  }

  .sell-car-section-why {
    margin: 48px auto;
  }

  .sell-car-section-why-sell-content {
    display: grid;
    grid-gap: 16px;
    grid-template-columns: auto auto;
  }

  .why-sell-content-text-p {
    font-size: 14px;
  }

  .sell-car-question-h1 {
    font-size: 36px;
  }

  .sell-car-question-text {
    margin-top: 12px;
  }

  .sell-car-question-text-p {
    font-size: 32px;
  }
}

@media (min-width: 1200px) {
  section {
    margin-top: 86px;
  }

  .sell-car-header-hero-content-text {
    padding: 80px;
  }

  .sell-car-header-hero-content-text h1 {
    font-size: 48px;
  }

  .sell-car-header-hero-content-text h2 {
    font-size: 90px;
    line-height: 64px;
  }

  .sell-car-header-hero-content-text h2 span {
    font-size: 60px;
  }

  .sell-car-form {
    padding: 50px 50px;
  }

  .sell-car-form-header {
    font-size: 24px;
  }

  .sell-car-form form {
    font-size: 16px;
  }

  .sell-car-question-h1 {
    font-size: 48px;
  }

  .sell-car-question-text {
    margin-top: 16px;
  }

  .sell-car-question-text-p {
    font-size: 36px;
  }
}
</style>