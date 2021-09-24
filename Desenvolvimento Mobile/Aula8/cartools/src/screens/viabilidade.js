import React, { useState } from 'react';
import { StyleSheet, SafeAreaView, View, Text, Image} from 'react-native';
import fonts from '../styles/fonts';
import { useNavigation } from '@react-navigation/core';
import { CustomBtn } from '../components/customBtn';

export function Viabilidade() {
  const navigation = useNavigation();

  function handleMenu(){
    navigation.navigate('Menu')
  }
  
  return (
    <SafeAreaView style={styles.container}>
      
      <View style={styles.voltar}>
        <Image source={require('../assets/icnBack.png')}/>
      </View>
      
      
      <View style={styles.viewTitulo}>
        <Text style={styles.titulo}> CALCULO DE VIABILIDADE</Text>
      </View>

      <CustomBtn 
          onPress = {handleMenu}
          textStyle = {{color:'white'}}
          textButton = 'CALCULAR'
       />

    </SafeAreaView>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: 'white'
  },
  voltar: {
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
