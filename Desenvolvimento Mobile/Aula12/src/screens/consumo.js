import React, { useState } from 'react';
import { StyleSheet, SafeAreaView, View, Text, Image, Dimensions } from 'react-native';
import fonts from '../styles/fonts';
import { useNavigation } from '@react-navigation/core';
import { CustomBtn } from '../components/customBtn';
import { CustomEdt } from '../components/customEdt';
import { CustomBtnBack } from '../components/customBtnBack';

export function Consumo() {
  const navigation = useNavigation();

  function handleMenu() {
    navigation.navigate('Menu')
  }

  function Calcular() {
    alert('Calcular')
  }

  return (
    <SafeAreaView style={styles.container}>

      <CustomBtnBack
        onPress={handleMenu}
      />


      <View style={styles.viewTitulo}>
        <Text style={styles.titulo}> CALCULO DE CONSUMO</Text>
      </View>


      <View style={styles.viewDescricao}>
        <Text style={styles.descricao}>VAI VIAJAR? FAÇA O PLANEJAMENTO</Text>
        <Text style={styles.descricao}>DO NECESSARIO</Text>
      </View>

      <View style={{ marginTop: 40 }}>
        <CustomEdt
          txtLabel='DISTÂNCIA DA VIAGEM'
          txtPlaceHolder='0'
        />
      </View>

      <View style={{ marginTop: 20 }}>
        <CustomEdt
          txtLabel='KM POR LITRO'
          txtPlaceHolder='0'
        />
      </View>

      <View style={{ marginTop: 20 }}>
        <CustomBtn
          onPress={Calcular}
          textStyle={{ color: 'white' }}
          textButton='CALCULAR'
        />
      </View>

      <View style={styles.viewPercent}>
        <Text style={styles.percent}> 0 </Text>
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
    marginRight: 15,
  },
  titulo: {
    color: 'dimgray',
    marginTop: 10,
    textAlign: 'right',
    fontFamily: fonts.titulo,
    paddingLeft: 15
  },
  viewDescricao: {
    marginTop: 10,
    marginLeft: 290
  },
  descricao: {
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
  }
});
