<template>
    <section>
        <div class="text">
            <h1>Pengajuan penjualan mobil Anda telah kami terima, Kami akan menghubungi Anda. Terima kasih.</h1>
            <router-link :to="{name: 'Home'}" ><button>Kembali</button></router-link>
            
        </div>
    </section>
</template>



<style scoped>
section {
    margin-top: 40px;
    min-height: calc(100vh - 184px);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 100px
}

.text {
    font-size: 36px;
    text-align: center;

}
</style>