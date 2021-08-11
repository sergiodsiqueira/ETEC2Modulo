using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace AppCalculoIMC
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void btnCalcular_Click(object sender, EventArgs e)
        {
            double peso, altura, imc;

            peso = double.Parse(edtAltura.Text);
            altura = double.Parse(edtPeso.Text);

            imc = peso / (altura * altura);

            lblIMC.Text = imc.ToString("N2");

            progressBar1.Value = Convert.ToInt32(imc);
        }

                private void Form1_Load(object sender, EventArgs e)
                {

                }

        private void btnLimpar_Click(object sender, EventArgs e)
        {
            edtAltura.Value = 0;
            edtPeso.Clear();
            progressBar1.Value = 0;

            edtAltura.Focus();
        }

        private void btnFechar_Click(object sender, EventArgs e)
        {
            Close();
        }
    }
}
