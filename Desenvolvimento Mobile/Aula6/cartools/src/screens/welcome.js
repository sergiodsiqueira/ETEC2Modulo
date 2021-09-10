import React from 'react';
import { StyleSheet, Text, SafeAreaView, Image, TouchableOpacity, Dimensions } from 'react-native';
import {AntDesign} from '@expo/vector-icons';
import fonts from '../styles/fonts';

export function Welcome() {
  return (
    <SafeAreaView style={styles.wrapper}>
        <Image source={require('../assets/LOGOCARTOOLS.png')}
        style={styles.logotipo}/>
        
        <Image source={require('../assets/v1_3.png')}
        style={styles.background}/>

        <TouchableOpacity style={styles.botao}>
            <Text style={styles.botaotexto}>
                ENTRAR
            </Text>
        </TouchableOpacity>
    </SafeAreaView>
  );
}

const styles = StyleSheet.create({
  wrapper: {
    flex: 1,
    backgroundColor: 'black',
    alignItems: 'center',
    justifyContent: 'top',
  },
  logotipo: {
    width: Dimensions.get('window').width,
    height: Dimensions.get('window').width * 0.07,
    resizeMode: 'contain',
    marginTop: 80
  },
  background: {
    width: Dimensions.get('window').width,
    height: Dimensions.get('window').width,
    resizeMode: 'contain',
    marginTop: 40
  },
  botao: {
    justifyContent: 'center',
    alignItems: 'center',
    borderRadius: 10,
    borderWidth: 1,
    borderColor: 'red',
    width: 140,
    height: 35,
    marginTop: 40
  },
  botaotexto: {
    color: 'white',
    fontSize: 11,
    fontFamily: fonts.normal,
  }
});
