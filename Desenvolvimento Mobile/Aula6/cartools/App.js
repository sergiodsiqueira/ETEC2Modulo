import React from 'react';
import { StyleSheet, Text, View } from 'react-native';
import {Montserrat_600SemiBold, Montserrat_300Light, useFonts } from '@expo-google-fonts/montserrat';
import AppLoading from 'expo-app-loading';
import Welcome from './src/screens/welcome'

export default function App() {

  const [fontes] = useFonts({  
    Montserrat_600SemiBold,
    Montserrat_300Light
  })

  if(!fontes)
  return(
    <AppLoading />
  )

  return (
    <Welcome />
  );
}
