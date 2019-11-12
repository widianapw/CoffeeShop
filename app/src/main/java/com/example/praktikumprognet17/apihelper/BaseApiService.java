package com.example.praktikumprognet17.apihelper;

import com.example.praktikumprognet17.features.kasir.show_produk.ValueProduk;
import com.example.praktikumprognet17.features.kategori_crud.show_kategori.ValueKategori;

import okhttp3.ResponseBody;
import retrofit2.Call;
import retrofit2.http.Field;
import retrofit2.http.FormUrlEncoded;
import retrofit2.http.GET;
import retrofit2.http.POST;

public interface BaseApiService {

    // Fungsi ini untuk memanggil API http://10.0.2.2/mahasiswa/login.php
    @FormUrlEncoded
    @POST("login")
    Call<ResponseBody> loginRequest(@Field("email") String email,
                                   @Field("password") String password);

    // Fungsi ini untuk memanggil API http://10.0.2.2/mahasiswa/register.php
    @FormUrlEncoded
    @POST("register")
    Call<ResponseBody> registerRequest(@Field("name") String nama,
                                       @Field("email") String email,
                                       @Field("password") String password,
                                       @Field("c_password") String c_password);

    @GET("kategori/")
    Call<ValueKategori> view();

    @GET("produk/") Call<ValueProduk> viewProduk();






}
