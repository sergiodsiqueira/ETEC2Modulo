import React, { useState } from 'react';
import { StyleSheet, SafeAreaView, View, Text, Image, Dimensions } from 'react-native';
import fonts from '../styles/fonts';
import { useNavigation } from '@react-navigation/core';
import { CustomBtn } from '../components/customBtn';
import { CustomEdt } from '../components/customEdt';

export function Viabilidade() {
  const navigation = useNavigation();

  function handleMenu(){
    navigation.navigate('Menu')
  }
  
  return (
    <SafeAreaView style={styles.container}>
      
      <View style={styles.voltar}>
        <Text>{'<'}</Text>
      </View>
      
      
      <View style={styles.viewTitulo}>
        <Text style={styles.titulo}> CALCULO DE VIABILIDADE</Text>
      </View>
      
      <View style={styles.viewDescricao}>
        <Text style={styles.descricao}>{
`AQUI VOCÊ PODE CONFERIR SE 
COMPENSA ABASTECER
COM ÁLCOOL OU GASOLINA`}</Text>
      </View>

      <View style={{marginTop:40}}>
      <CustomEdt
          txtLabel = 'PREÇO DO ÁLCOOL'
          txtPlaceHolder = 'R$ 0,00'
       />
       </View>

       <View style={{marginTop:20}}>
      <CustomEdt
          txtLabel = 'PREÇO DA GASOLINA'
          txtPlaceHolder = 'R$ 0,00'
       />
       </View>

      <View style={{marginTop:20}}>
      <CustomBtn 
          onPress = {handleMenu}
          textStyle = {{color:'white'}}
          textButton = 'CALCULAR'
       />
      </View>

      <View style={styles.viewPercent}>
        <Text style={styles.percent}> 0% </Text>
      </View>

      <View style={styles.viewRodape}>
        <Text style={styles.rodape}>Na média, uma relação de 73% ou menos do preço do 
                                       etanol em relação ao preço da gasolina, favorece o uso 
                                       do álcool. Se for 74% ou mais, use gasolina. </Text>
      </View>
      

    </SafeAreaView>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: 'white'
  },
  voltar: {
    width: Dimensions.get('window').width,
    height: Dimensions.get('window').width * 0.07,
    resizeMode: 'contain',
  },  
  viewTitulo: {
    marginTop: 5,
    marginLeft: 15,
    marginRight: 15
  },
  titulo: {
    color: 'dimgray',
    marginTop: 10,
    textAlign: 'right',
    fontFamily: fonts.titulo,
    paddingLeft: 15
  },
  viewDescricao: {
    marginTop: 10
  },
  descricao: {
    marginTop: 10,
    fontSize: 10,
    fontFamily: fonts.normal,
    paddingLeft: 15
  },
  viewPercent: {
    marginTop: 10
  },
  percent: {
    color: 'silver',
    textAlign: 'center',
    fontSize: 70,
    fontFamily: fonts.normal,
    paddingLeft: 15
  },
  viewRodape: {
    marginTop: 10
  },
  rodape: {
    marginTop: 10,
    fontSize: 10,
    fontFamily: fonts.normal,
    paddingLeft: 15
  },
});
