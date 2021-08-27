import { StatusBar } from 'expo-status-bar';
import React from 'react';
import { StyleSheet, Text, View } from 'react-native';
import { Welcome } from './src/screens/welcome';
import {Montserrat_500Medium, useFonts } from '@expo-google-fonts/montserrat';
import { Menu } from './src/screens/menu';

export default function App() {
  const [fontes] = useFonts({  
    Montserrat_500Medium
  })

  return (
    <Menu/>
  );
}
