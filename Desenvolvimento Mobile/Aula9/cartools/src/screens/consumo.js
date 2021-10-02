import React, { useState } from 'react';
import { StyleSheet, SafeAreaView, View, Text } from 'react-native';
import fonts from '../styles/fonts';
import { useNavigation } from '@react-navigation/core';
import { CustomBtn } from '../components/customBtn';
import { CustomEdt } from '../components/customEdt';

export function Consumo() {
  const navigation = useNavigation();

  function handleMenu(){
    navigation.navigate('Menu')
  }
  
  return (
    <SafeAreaView style={styles.container}>
      <View style={styles.viewTitulo}>
        <Text style={styles.titulo}> CALCULO DE CONSUMO</Text>
      </View>

      <CustomBtn 
          onPress = {handleMenu}
          textStyle = {{color:'white'}}
          textButton = 'CONSUMO'
       />
      
    </SafeAreaView>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: 'white'
  },
  viewTitulo: {
    marginTop: 10
  },
  titulo: {
    marginTop: 10,
    textAlign: 'left',
    fontFamily: fonts.titulo,
    paddingLeft: 15
  }
});
